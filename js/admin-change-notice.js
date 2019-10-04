// document.writeln("<script src='js/form-manipulation.js'></script>");

$(function() {
	const NOTICE_FORM = { form_id:"#notice_form", form_input_id:"#notice_input" };


	function resetMessageField() {
		changeElementText("#login_remarks", "");
	}

	
	$("#notice_form").submit(function(e) {
		e.preventDefault();	

		if ($(NOTICE_FORM.form_input_id).val().length == 0){
			changeFormElementValidity("#notice_comments", 'text-danger');
			changeElementText("#notice_comments", "Empty message input.");


		} else {

			var t_message = $(NOTICE_FORM.form_input_id).val();
			var t_from = $("#nav_user").text();

			$.ajax({
		    type: "POST",
		    url: "admin_change_notice_post.php",
		    dataType: "JSON",
		    data: {p_message:t_message},

		}).done(function (e) {
			// alert(e);
			console.log(e);
			switch(e.res) {
				case 1: 
					//Store id into session and is loggined, store the time logged in too
					changeFormElementValidity("#notice_comments", 'text-success');
					resetMessageField();
					changeElementText("#notice_comments", "Success");
					break;
				case 0:
					changeFormElementValidity("#notice_comments", 'text-danger');
					changeElementText("#notice_comments", "Invalid input.");
					break;
				default:
					changeFormElementValidity("#notice_comments", 'text-danger');
					changeElementText("#notice_comments", "Invalid input.");

			}
			
		});
		}
	});
});





