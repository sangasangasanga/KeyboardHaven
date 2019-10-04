<?php 
	include('./session_handles.php'); 
	include('./functions/database_functions.php');
	require_once('./sanitize_trim.php'); //To prevent XSS

	$notice_results = array();

	if ($_POST['p_message'] != null) {

		$s_message = strip_tags(RemoveXSS($_POST['p_message']));
		insertNoticeMessageToDB($s_message, $_SESSION['email']);		
		$notice_results['res'] = 1;

	} else {
		$notice_results['res'] = 0;
	}

	echo json_encode($notice_results);
?>



