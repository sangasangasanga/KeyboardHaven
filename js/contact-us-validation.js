
$(function() {

	const CONTACT_FORM = { name_input_id:"#cnt_name_input", name_remarks_id:"#cnt_name_remarks" ,
							email_input_id:"#cnt_email_input", email_remarks_id:"#cnt_email_remarks",
							subject_select_id:"#cnt_subject", subject_remarks_id:"#cnt_subject_remarks",
							message_input_id:"#cnt_message", message_remarks_id:"#cnt_message_remarks",
							sent_remarks_id:"#sent_remarks" };



	$("#cnt_name_input").focusout(function() {
		//Check if name only has acceptable characters to prevent XSS
		validateNameInput(CONTACT_FORM.name_input_id, CONTACT_FORM.email_remarks_id, $(this).val());
	});	

	$("#cnt_email_input").focusout(function() {
		//Check if email input is also has acceptable text to prevent potential XSS
		validateEmailInput(CONTACT_FORM.email_input_id, CONTACT_FORM.email_remarks_id, $(this).val());
	});	


	$("#message").focusout(function() {
		//		
	});	

	// checkIfEmpty([CONTACT_FORM.message_input_id]);

	$("#cnt_form").submit(function(e) {
		e.preventDefault();		

		var fields = [ CONTACT_FORM.name_input_id, CONTACT_FORM.email_input_id];
		//Will only proceed if the name field and email field has green ticks
		// to indicate they are acceptable format and Subject has been chosen.	
		if ((allRequredFieldsIsValid(fields) == false) || 
			checkIfEmpty([ CONTACT_FORM.name_input_id, CONTACT_FORM.email_input_id, 
			CONTACT_FORM.message_input_id, CONTACT_FORM.subject_select_id])) 
		{
		 	changeFormElementValidity(CONTACT_FORM.sent_remarks_id, 'text-danger');
			changeElementText("#sent_remarks", "Some fields are invalid or empty.")
		} else {

			var u_name = $(CONTACT_FORM.name_input_id).val();
			var u_email = $(CONTACT_FORM.email_input_id).val();
			var u_subject = $(CONTACT_FORM.subject_select_id).val();
			var u_message = $(CONTACT_FORM.message_input_id).val();

			$.ajax({
				type: 'POST',
				url: 'contactUs_post.php',
				// dataType: 'JSON',
				data: {p_name:u_name, p_email:u_email, p_subject:u_subject, p_message:u_message }
			}).done(function (e) {
				//alert(e)
				switch (e) {
					case "1":
						resetAllFormElements([CONTACT_FORM.name_input_id, CONTACT_FORM.email_input_id, CONTACT_FORM.message_input_id]);
						changeFormElementValidity(CONTACT_FORM.sent_remarks_id, 'text-success');
						changeElementText(CONTACT_FORM.sent_remarks_id, "Your message was successfully sent.")
						break;
					case "0":
						changeFormElementValidity(CONTACT_FORM.sent_remarks_id, 'text-danger');
						changeElementText(CONTACT_FORM.sent_remarks_id, "Some fields are invalid or empty.")
						break;

					default:
						changeFormElementValidity(CONTACT_FORM.sent_remarks_id, 'text-danger');
						changeElementText(CONTACT_FORM.sent_remarks_id, "Error occured...")

				}

			});

		}
	
	});

});





