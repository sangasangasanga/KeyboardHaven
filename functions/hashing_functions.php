<?php 
	

	function returnBcryptHashedPassword($val) {
		return password_hash($val, PASSWORD_BCRYPT, );
	}

	function validifyAgainstHashedPassword($password, $hashed_password) {
		return (password_verify($password, $hashed_password));
	}
	// $unhashed = "testing123";
	// $hashed_password = password_hash($unhashed, PASSWORD_BCRYPT, );

	// $hashedpwd = '$2y$10$BXtEi8V30ZpPeP3haSy/mOXO9cSQRCUjgHDZg9JcC6Bo/vqa1mi9y';
	// if (password_verify('testing123', $hashedpwd)) {
	//     echo 'Password is valid!';
	// } else {
	//     echo 'Invalid password.';

//	echo returnBcryptHashedPassword('?11223wells');



?>