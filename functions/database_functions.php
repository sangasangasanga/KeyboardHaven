<?php 
	
	require_once('hashing_functions.php');
	require_once('./lib/Medoo/db.php');
//'postal_code' => ""


	function insertBlankShippingDetails($user_email) {
		DB::insert('shipping_details', ['first_name' => "", 'last_name' => "", 'address1' => "", 'address2' => "", 'city' => "", 'mem_id' => getUserIdFromEmail($user_email)]);
		return;
	}

	function getShippingDetails($user_email) {
		return DB::select('shipping_details', ['first_name','last_name', 'address1', 'address2', 'city', 'postal_code'], ['mem_id' => getUserIdFromEmail($user_email)])[0];

	}
	function updateShippingDetails($user_email, $first_name, $last_name, $address1, $address2, $city, $postal) {


		db::update('shipping_details', ['first_name' => $first_name, 'last_name' => $last_name, 'address1' => $address1, 'address2' => $address2, 'city' => $city,  'postal_code' => $postal], ['mem_id' => getUserIdFromEmail($user_email)]);
		return;
	}

	// User Log functions
	function insertLoginTime($user_email) {
		DB::insert('log', ['email' => $user_email, 'login_time' => date('Y-m-d H:i:s')]);
		return;	
	}

	function insertLogoutTime($user_email) {
		echo $user_email;
		DB::insert('log', ['email' => $user_email, 'logout_time' => date('Y-m-d H:i:s')]);
		return;
	}

	function getContactDeTails($user_email) {
  		return DB::select('members', ['mem_contact_no'], ['email' => $user_email])[0]['mem_contact_no'];
	}


	function getUserIdFromEmail($user_email) {
		return DB::select('members', ['mem_id'], ['email' => $user_email])[0]['mem_id'];
	}
	function getLastestNoticeMessage(){
		return DB::select('notice_message', ['notice_text'], ['ORDER' => ['notice_id' => 'DESC', 'LIMIT' => '1']])[0]['notice_text'];
	}
	function insertNoticeMessageToDB($msg, $user_email) {
		DB::insert('notice_message', ['notice_text' => $msg, 'changed_by' => $user_email]);
		return;
	}

	function getIsAdmin($user_email) {
		return (DB::select("members", ['mem_is_admin'], ['email' => $user_email])[0]['mem_is_admin'] == 1 ? 1 : 0);
	}
	function resetTriesCount($user_email) {
		DB::update("members", ["tries" => 0], ["email" => $user_email]);
		return;
	}
	function increaseTryCountByOne($user_email) {
		DB::update("members", ["tries[+]" => 1], ["email" => $user_email]);
		return;
	}

	function lockUserAccountIfNecessary($user_email) {
		DB::update("members", ["is_locked" => 1], ["email" => $user_email, "tries[>]" => 4]);
		return;
	}

	function increaseLoginCounter($user_email) {
		DB::update("members", ["login_times[+]" => 1], ["email" => $user_email]);
		return;
	}

	function checkIfEmailIsVerified($user_email) {
		return (DB::select('members', ['is_verified'], ['email' => $user_email] )[0]['is_verified'] == 1  ? 1: 0);
	}
	
	function checkIfEmailAlreadyExistsInDatabase($user_email) {
		$listItems = DB::select("members", ["email"], ["email" => $user_email]);

		if (sizeof($listItems) == 0) {
			return false;
		} else if (sizeof($listItems) > 0) {
			return true;
		}
	}
	function checkIfEmailIsLocked($user_email) {
		$details = DB::select("members", ["is_locked"], ["email" => $user_email]);
		if (sizeof($details) > 0) {
			return $details[0]['is_locked'];
		} else {
			return -1;
		}

	}
	function getHashedPasswordFromDatabase($user_email) {
		$details = DB::select("members", ["p198gnj"], ["email" => $user_email]);
		
		if (sizeof($details) > 0) {
			return $details[0]['p198gnj'];			
		} else {
			return "no password";
		}
	}

	function insertMessageIntoDatabase($name, $email, $subject, $message) { 
		// echo $name. " ".$email." ".$subject." ". $message;

		$test = DB::insert("messages", ['msg_sender' => $name, 'msg_email' => $email,
			'msg_subject' => $subject, 'msg_details' => $message]);
		return;
	}

	function insertDetailsIntoSession($user_email, $is_admin) {
		if (session_id() != "") {
			$_SESSION['email'] = $user_email; 
			$_SESSION['is_admin'] = $is_admin;
		} 
		return;
	}

	function insertSignUpDetails($user_email, $user_password) {
		// echo $user_password;
		DB::insert('members', ['email' => $user_email, 'p198gnj' => $user_password, 
		'is_locked' => 0, 'login_times' => 0, 'tries' => 0, 'is_verified' => 0]);
		return;
	}



	function signupWithEmailAndPassword($user_email, $user_password) {
		//1 Successfully added to database
		//0 Email already exists
		//-1 Invalid Email
		//-2 Invalid password
		// -3 Error
		if (empty($user_email) || $user_email == "") { return -1; }
		if (empty($user_password) || $user_password == "") { return -2; }

		if (checkIfEmailAlreadyExistsInDatabase($user_email)) { 
			return 0; 
		} else {
			insertSignUpDetails($user_email, returnBcryptHashedPassword($user_password));
			insertBlankShippingDetails($user_email);
			return 1;			
		}

		return -3;
	}


	function loginWithEmailAndPassword($user_email, $user_password) {
		//Check if email exists if exist then grab its hash from database,
		// then validate its hash over here.
		//Return values and their meaning
		// 1 means Success Email and password match
		// 0 Email doesnt exist
		// -1 Invalid Email input
		// -2 Invalid Password input
		// -3 Password incorrect
		// -4 Account is locked
			

		if (empty($user_email) || $user_email == "") {
			return -1;
		} elseif (empty($user_password) || $user_password == "") {
			return -2;
		}

		if (checkIfEmailAlreadyExistsInDatabase($user_email)) {

			if (checkIfEmailIsLocked($user_email) == 1) { 
				return -4;
			}
			

			$db_hash = getHashedPasswordFromDatabase($user_email);

			if (validifyAgainstHashedPassword($user_password, $db_hash)) {
				if (checkIfEmailIsVerified($user_email) == 0) {
					return -5;
				}

				resetTriesCount($user_email);
				increaseLoginCounter($user_email);
				insertLoginTime($user_email);
				insertDetailsIntoSession($user_email, getIsAdmin($user_email));
				return 1;
			} else {
				increaseTryCountByOne($user_email);
				lockUserAccountIfNecessary($user_email);
				return -3;
			}

		} else {
			return 0;
		}

	}









?>