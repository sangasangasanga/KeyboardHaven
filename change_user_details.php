<?php 
  
	include('./session_handles.php'); 
	include('./functions/database_functions.php');
	require_once('./sanitize_trim.php'); //To prevent XSS



	
	
	$signup_results = array();
	if (isset($_POST['p_email']) && isset($_POST['p_password'])) {
		$s_email = strip_tags(RemoveXSS($_POST['p_email']));
		$s_password = strip_tags(RemoveXSS($_POST['p_password']));

		//1 Successfully added to database
		//0 Email already exists
		//-1 Invalid Email
		//-2 Invalid password
		// -3 Error
		//-5 Error
		$signup_results['res'] = signupWithEmailAndPassword($s_email, $s_password);
	} else {
		//Fail never receive any post
		$signup_results['res'] = -4;
	}
	// insertSignUpDetails($s_email, $s_password);
	echo json_encode($signup_results)
?>



