<?php 
  
  include('./session_handles.php'); 
  include('./functions/database_functions.php');
 

  $login_result = array();
  // $login_result['res'] = loginWithEmailAndPassword("msndocument@hotmail.com", "?11223wells");
  $login_result['res'] = loginWithEmailAndPassword($_POST['login_email'], $_POST['login_password']);
  echo json_encode($login_result);

?>



