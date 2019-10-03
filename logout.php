<?php 
  
  include('./session_handles.php'); 
  // include('./functions/database_functions.php');
 
  unset($_SESSION['email']);
  unset($_SESSION['is_admin']);


  header("Location: http://localhost/keyboardhaven/index.php");
  // $login_result = array();


  // $login_result['res'] = loginWithEmailAndPassword("msndocument@hotmail.com", "?11223wells");
  // $login_result['res'] = loginWithEmailAndPassword($_POST['login_email'], $_POST['login_password']);
  // echo json_encode($login_result);

?>