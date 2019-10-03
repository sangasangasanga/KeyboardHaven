$(function() {


	const PASS_STRONG_PATTERN = "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})";
	const PASS_MEDIUM_PATTERN = "^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})";

	const SIGNUP_PASSWORD = { input_id:"#signup_password", remarks_id:"#signup_password_remarks",
							strength_bar_id:"#pwd_strength_bar", strength_label_id:"#pwd_strength_label" };

	const SIGNUP_FORM = { email_input_id:"#signup_email", email_remarks_id:"#signup_email_remarks",
						 password_input_id:"#signup_password", password_remarks_id:"#signup_password_remarks" };


	//Manipulation of Signup Password strength Bar
	function changePasswordStrengthBarPercent(bar_id, bar_percent) {

		$(bar_id).css({"width": bar_percent});
	}

	function changePasswordStrengthLabel(bar_id, label_text) {
		$(bar_id).text(label_text);
	}
	function changePasswordStrengthBarColor(bar_id, class_color) {
		_resetSignUpPasswordStrengthBarColor(bar_id);
		$(bar_id).addClass(class_color);
	}

	function _resetSignUpPasswordStrengthBarColor(bar_id) {
		$(bar_id).removeClass('progress-bar-red');
		$(bar_id).removeClass('progress-bar-blue');
		$(bar_id).removeClass('progress-bar-green');
	}

	function _adjustPasswordStrengthBarPercent(bar_id, strength_text) {
		switch(strength_text) {

			case "none":
				changePasswordStrengthBarPercent(bar_id, "0%");
				changePasswordStrengthLabel(bar_id, "");
				break;

			case "strong":
				changePasswordStrengthBarPercent(bar_id, "100%");
				changePasswordStrengthLabel(bar_id, "Strong");
				changePasswordStrengthBarColor(bar_id, "progress-bar-green")
				break;

			case "medium":
				changePasswordStrengthBarPercent(bar_id, "66%");
				changePasswordStrengthLabel(bar_id, "Medium");
				changePasswordStrengthBarColor(bar_id, "progress-bar-blue")
				break;

			case "weak":
				changePasswordStrengthBarPercent(bar_id, "33%");
				changePasswordStrengthLabel(bar_id, "Weak");
				changePasswordStrengthBarColor(bar_id, "progress-bar-red")
				break;
			default:
				changePasswordStrengthBarPercent(bar_id, "0%");
				changePasswordStrengthLabel(bar_id, "");
		}
	}
	function showPasswordStrengthOnBar() {
		var strength = _evaluatePasswordStrength($(SIGNUP_PASSWORD.input_id).val());
		_adjustPasswordStrengthBarPercent(SIGNUP_PASSWORD.strength_bar_id, strength);
	}


	function _evaluatePasswordStrength(password_text) {
		if (password_text === "") {
			return "none"
		} else if(_regexMatchString(PASS_STRONG_PATTERN, password_text)) {
			return "strong";
	    } else if(_regexMatchString(PASS_MEDIUM_PATTERN, password_text)) {
	        return "medium";
	    } else {
	        return "weak";
	    }
	}

	function validateSignUpPasswordInput(password_id, password_text) { 
		//validates the length, complexity, must be minimum medium and have min 8 chars
		//Only validate if its not empty
		//If inappropriate the textbox will be changed to invalid format
		//The remarks will then reflect the reason

		var strength = _evaluatePasswordStrength(password_text);
		if (password_text.length > 0) {

			if (password_text.length < 8) {
				changeFormElementValidity(SIGNUP_PASSWORD.input_id, "is-invalid");
				changeElementText(SIGNUP_PASSWORD.remarks_id, "Minimum password length has to be at least 8.");
			}
			else if (strength == "weak" || strength == "none" ) {
				changeFormElementValidity(SIGNUP_PASSWORD.input_id, "is-invalid");
				changeElementText(SIGNUP_PASSWORD.remarks_id, "Password strength has to be at least medium.");
			}
						
			else {
				changeFormElementValidity(SIGNUP_PASSWORD.input_id, "is-valid");
				changeElementText(SIGNUP_PASSWORD.remarks_id, "");
			} 
		} else {
			//reset password validity here
			resetElementValidity(SIGNUP_PASSWORD.input_id);
		}
	}



	$("#signup_email").focusout(function() {
		//Check if email is taken and correct format
		validateEmailInput(SIGNUP_FORM.email_input_id, SIGNUP_FORM.email_remarks_id, $(this).val());
	});

	//Check password Complexity while user is typing
	$("#signup_password").keypress(function() {
		showPasswordStrengthOnBar();
	});	

	$("#signup_password").focusout(function() {
		showPasswordStrengthOnBar();		
		validateSignUpPasswordInput(SIGNUP_PASSWORD.input_id, $(this).val());
	});	

	$("#signup_form").submit(function(e) {
		e.preventDefault();	
		//For signup, email and password both have to be satisfiable. 
		//Email must be correct
		//Password difficulty must be medium, and has a length of > 8
		var items = [ SIGNUP_FORM.email_input_id, SIGNUP_FORM.password_input_id ];
		if (allRequredFieldsIsValid(items)) {			
			//Can sync with database using php and return to home page.

			var t_email = $(SIGNUP_FORM.email_input_id).val();
			var t_password = $(SIGNUP_FORM.password_input_id).val();

			$.ajax({
			    type: "POST",
			    url: "signup_post.php",
			    dataType: "JSON",
			    data: {p_email:t_email, p_password:t_password},
			  
			}).done(function (e) {
				//1 Successfully added to database
				//0 Email already exists
				//-1 Invalid Email
				//-2 Invalid password
				//-3 Error
				//-5 Error
				console.log(e);
				console.log(e.res);
				switch(e.res) {
					case 1: 
						//Store id into session and is loggined, store the time logged in too
						changeElementText("#signup_remarks", "Success");
						changeElementValue("#hidden_email", t_email);
						$("#hidden_signup").submit();
						// window.location.replace("signup_post_result.php");
						break;
					case 0:
						//Print Email doesnt exist at the form remarks
						changeElementText("#signup_remarks", "Email already exists, please choose another email.");
						break;

					case -1:
						//Invalid Email
						changeElementText("#signup_remarks", "Invalid Email.");
						break;
					case -2:
						//Invalid password input
						changeElementText("#signup_remarks", "Invalid password.");
						break;
					case -3:
						//Password is incorrect, increase try counter by 1
						changeElementText("#signup_remarks", "Error -3");
						break;

					case -4:
						changeElementText("#signup_remarks", "Error -4");
						break;
					default:
						changeElementText("#signup_remarks", "Error default");
				}
				
			});
		} else {
			changeElementText("#signup_remarks", "Some fields are invalid...");
		}



	});

});

