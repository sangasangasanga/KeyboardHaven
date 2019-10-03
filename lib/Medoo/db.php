<?php

include(realpath(dirname(__FILE__)).'/external/Medoo.php');
use Medoo\Medoo;
/**
 * This is a static wrapper around the Medoo DB class.
 */
class DB
{
	public static function _db() 
	{
		static $db_instance;
		if (isset($db_instance)) 
			return $db_instance;
				
		return $db_instance = new Medoo(array(
			'database_type' => 'mysql',
			'database_name' => 'dbKeyboardHaven',
			'server' => 'localhost',
			'username' => 'root',
			'password' => 'AL26yK80f0a08dOd',
		));
	 
	}

	public static function begin_transaction() 
	{ DB::_db()->pdo->beginTransaction(); }

	public static function rollback() 
	{ DB::_db()->pdo->rollback(); }

	public static function commit() 
	{ DB::_db()->pdo->commit(); }

	public static function bulk_insert($table, $datas)
	{	
		if (is_array($datas) && isset($datas[0]) && is_array($datas[0])) {
			$columns = array_keys($datas[0]);
			$all_same = true;
			foreach ($datas as $row) 
				if (!is_array($row) || array_diff(array_keys($row), $columns)) 
					$all_same = false;	
			if ($all_same) {
				foreach (array_chunk($datas, 100) as $chunk) {
					$sql = 'INSERT INTO "' . $table . '" (' . implode(', ', $columns) . ') VALUES ';
					$insert_values = array();
					foreach ($chunk as $row) foreach ($row as $value) $insert_values[] = $value;
					$question_marks = '(' . implode(array_fill(0, sizeof($columns), '?'), ',') . ')';
					$sql .= implode(array_fill(0, sizeof($chunk), $question_marks), ',');
					$stmt = DB::_db()->pdo->prepare($sql);
					$stmt->execute($insert_values);
				}
				return true;
			}
		}
		return false;
	}

	public static function query($query) 
	{ return DB::_db()->query($query); }

	public static function select($table, $join, $columns = null, $where = null) 
	{ return DB::_db()->select($table, $join, $columns, $where); }

	public static function insert($table, $datas) 
	{ return DB::_db()->insert($table, $datas); }

	public static function update($table, $data, $where = null) 
	{ return DB::_db()->update($table, $data, $where); }

	public static function delete($table, $where) 
	{ return DB::_db()->delete($table, $where); }

	public static function replace($table, $columns, $search = null, $replace = null, $where = null) 
	{ return DB::_db()->replace($table, $columns, $search, $replace, $where); }

	public static function get($table, $join = null, $column = null, $where = null) 
	{ return DB::_db()->get($table, $join, $column, $where); }

	public static function has($table, $join, $where = null) 
	{ return DB::_db()->has($table, $join, $where); }

	public static function count($table, $join = null, $column = null, $where = null) 
	{ return DB::_db()->count($table, $join, $column, $where); }

	public static function max($table, $join, $column = null, $where = null) 
	{ return DB::_db()->max($table, $join, $column, $where); }

	public static function min($table, $join, $column = null, $where = null) 
	{ return DB::_db()->min($table, $join, $column, $where); }

	public static function avg($table, $join, $column = null, $where = null) 
	{ return DB::_db()->avg($table, $join, $column, $where); }

	public static function sum($table, $join, $column = null, $where = null) 
	{ return DB::_db()->sum($table, $join, $column, $where); }

}