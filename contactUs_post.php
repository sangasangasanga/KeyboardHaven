<?php 
	include('./session_handles.php'); 
	include('./functions/database_functions.php');
 	
 	require_once('./sanitize_trim.php');


 	if (isset($_POST['p_name']) && isset($_POST['p_email']) && isset($_POST['p_subject']) && isset($_POST['p_message'])) {
 		
 		$s_name = strip_tags(RemoveXSS($_POST['p_name']));
	 	$s_email = strip_tags(RemoveXSS($_POST['p_email']));
	 	$s_subject = strip_tags(RemoveXSS($_POST['p_subject']));
	 	$s_message = strip_tags(RemoveXSS($_POST['p_message']));

	 	insertMessageIntoDatabase($s_name, $s_email, $s_subject, $s_message);

	 	echo 1;
 	} else {
 		echo 0;
 	}

 	

	


	//Check using php if those values are valid



	// function insertMessageIntoDatabase($name, $email, $subject, $message) { 
	// 	DB::update("messages", ['msg_sender' => $name, 'msg_email' => $email,
	// 		'msg_subject' => $subject, 'msg_details' => $message]);
	// 		//msg_sender 	msg_email 	msg_subject 	msg_details 
	// }


	// $login_result = array();
	// // $login_result['res'] = loginWithEmailAndPassword("msndocument@hotmail.com", "?11223wells");
	// $login_result['res'] = loginWithEmailAndPassword($_POST['login_email'], $_POST['login_password']);
	// echo json_encode($login_result);


?>