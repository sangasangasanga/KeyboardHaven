
const EMAIL_REGEX = /(?!.*\.{2})^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
const NAME_PATTERN = "^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*";


function _regexMatchString(pattern, input) {
	var reg = new RegExp(pattern);
	return reg.test(input);
}


function changeFormElementValidity(input_id, validity_style) {
	resetElementValidity(input_id);
	$(input_id).addClass(validity_style);
}

function changeElementText(comment_id, comment_text) {
	// alert(comment_id);
	$(comment_id).text(comment_text);
}

function resetElementValidity(element_id) {
	$(element_id).removeClass('is-invalid');
	$(element_id).removeClass('is-valid');
	$(element_id).removeClass('text-danger');
	$(element_id).removeClass('text-success');
		
}

function changeElementValue(element_id, input_value) { 
	$(element_id).val(input_value);
}


function _clearElementInnerText(element_id) {
	$(element_id).val(null);
}

function resetAllFormElements(form_input_id_list) {
	try {
		$.each(form_input_id_list, function( key, value ) {
			resetElementValidity(value);
			_clearElementInnerText(value);
		});
	} catch(err) {
		console.log(err);
	}
}

function validateEmailInput(email_input_id, email_remarks_id, email_text) {
	if (email_text.length > 0) {
		if (EMAIL_REGEX.test(email_text)) {
			changeFormElementValidity(email_input_id, "is-valid");
		} else {
			changeFormElementValidity(email_input_id, "is-invalid");
			changeElementText(email_remarks_id, "Invalid email format.")
		}
	} else {
		resetElementValidity(email_input_id);
	}
}

function validateNameInput(name_input_id, name_remarks_id, name_text) {
	if (name_text.length > 0) {
		if (_regexMatchString(NAME_PATTERN, name_text)) {
			changeFormElementValidity(name_input_id, "is-valid");
		} else {
			changeFormElementValidity(name_input_id, "is-invalid");
			changeElementText(name_input_id, "Invalid name format.");
		}
	} else {
		 resetElementValidity(name_input_id);
	}
}

function allRequredFieldsIsValid(fields_id) {
	var valid = true; var i;
	for (i = 0; i < fields_id.length; i++) {
		valid = $(fields_id[i]).hasClass(("is-valid"));
	}
	return valid;
}

function elementHasValidClass(ele_id) { 
		if ($(ele_id).hasClass('is-valid')) {
			return true;
		} else { 
			return false
		}
	}

//Returns true if all the styles of elements in fields_id has the class 'is-valid'.
function allRequredFieldsIsValid(fields_id) {
	var valid = true; var i;
	for (i = 0; i < fields_id.length; i++) {
		valid = $(fields_id[i]).hasClass(("is-valid"));
	}
	return valid;
}

//Returns true if any of the elements in fields_id has empty value.
function checkIfEmpty(fields_id)  { 
	var valid = false; var i;
	//alert(fields_id[0]);
	console.log($(fields_id[i]).val());
	for (i = 0; i < fields_id.length; i++) {
		if ($(fields_id[i]).val().length == 0) {
			valid = true;
			break;
		}
	}
	return valid;
}