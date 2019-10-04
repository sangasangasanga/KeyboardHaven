$(function() {

	$("#profile_details_tab").click(function() {
		//Check if email is taken and correct format

		
		$("#profile_container").show(1000);
		$("#shipping_container").hide();
		// validateEmailInput(SIGNUP_FORM.email_input_id, SIGNUP_FORM.email_remarks_id, $(this).val());
	});


	$("#shipping_details_tab").click(function() {

		$("#profile_container").hide();
		$("#shipping_container").show(1000);
		//Check if email is taken and correct format
		// validateEmailInput(SIGNUP_FORM.email_input_id, SIGNUP_FORM.email_remarks_id, $(this).val());
	});

	$("#shipping_container").hide();
	$("#profile_container").show();

});

