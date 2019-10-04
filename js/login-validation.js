// document.writeln("<script src='js/form-manipulation.js'></script>");

$(function() {

	/* Constants used for Signup Form */
	const LOGIN_FORM = { email_input_id:"#login_email", email_remarks_id:"#login_email_remarks",
						 password_input_id:"#login_password", password_remarks_id:"#login_password_remarks" };

	const FORM_INPUT_IDS = [ "#login_email", "#login_password", "#signup_email", "#signup_password"];


	function resetLoginForm() {
		changeElementText("#login_remarks", "");
	}
	

	$("#login_email").focusout(function() {
		//validate if proper email first
		validateEmailInput(LOGIN_FORM.email_input_id, LOGIN_FORM.email_remarks_id, $(this).val());
	});
	
	$("#login_password").focusout(function() {
		//ensure that 

		if ($(this).val().length < 8 && $(this).val().length > 0) {
			changeFormElementValidity(LOGIN_FORM.password_input_id, "is-invalid");
			changeElementText(LOGIN_FORM.password_remarks_id, "Minimum password length has to be at least 8.");
		} else {
			resetElementValidity(LOGIN_FORM.password_input_id);
		}
	});	

	// ------Error Documentation----------
	// 	1 means Success Email and password match
	// 	0 Email doesnt exist
	// -1 Invalid Email input
	// -2 Invalid Password input
	// -3 Password incorrect	
	// For login, only need to ensure that email is in correct format
	// Password only has to have a minimum length of 8.
	// ------------------------------------+

	$("#login_form").submit(function(e) {
		e.preventDefault();	
		var items = [ LOGIN_FORM.email_input_id ];
		if (allRequredFieldsIsValid(items)) {			
		
			var t_email = $(LOGIN_FORM.email_input_id).val();
			var t_password = $(LOGIN_FORM.password_input_id).val();
			// alert(t_email);
			// alert(t_password);
			$.ajax({
			    type: "POST",
			    url: "login_post.php",
			    dataType: "JSON",
			    data: {login_email:t_email, login_password:t_password},
			  
			}).done(function (e) {

				console.log(e);
				switch(e.res) {
					case 1: 
						//Store id into session and is loggined, store the time logged in too
						changeFormElementValidity("#login_remarks", "text-success");
						changeElementText("#login_remarks", "Success");

						window.location.replace("index.php");
						// location.reload();
						break;
					case 0:
						//Print Email doesnt exist at the form remarks
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Email does not exist.");
						break;

					case -1:
						//Invalid Email
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Invalid Email.");
						break;
					case -2:
						//Invalid password input
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Invalid password.");
						break;
					case -3:
						//Password is incorrect, increase try counter by 1
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Incorrect password, please try again.");
						break;
					case -4:
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Your account is locked. Please contact administrator.");
						break;
					case -5:
						changeFormElementValidity("#login_remarks", "text-danger");
						changeElementText("#login_remarks", "Please verify your account.");
						break;
				}
				
			});


		} else {			
			changeElementText("#login_remarks", "Please fill in the empty fields...");
		}

	});
});





