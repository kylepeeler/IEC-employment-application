// MSM Employment Application Form
// Created by Kyle Peeler for Coles Marketing/Methodist Sports Medicine
// contact: kpeeler@colesmarketing.com

var FORM_ID = "MSMApplicationForm";
var SHOWHIDDENFIELDS = false; //show all hidden fields

//main
$(document).ready(function() {
	"use strict";
	$("#captchaResponse").hide();
	$('.datepicker').datepicker({
		autoclose: true,
		changeMonth: true,
		changeYear: true

	});
	$("#applicationDate").val(getFormattedDate(new Date()));
	toggleYNResponse("convictedOfCrime");
	toggleYNResponse("criminalChargesPending");
	toggleYNResponse("disciplinaryActions");
	toggleYNResponse("previousApplicant");
	toggleYNResponse("previouslyWorkedMSM");
	toggleResponseOnNo("contactPresentEmployer");
	toggleYNResponse("driversLicenseSuspendedRevoked");
	toggleYNResponse("dischargedFired");
	toggleYNResponse("uploadResume");


	$('#formSubmitButton').on('click', function() {
		submitForm(FORM_ID);
	});



});


function submitForm(form) {

	"use strict";
	var authPassed = true;
	var rsp = grecaptcha.getResponse();
	for (var n = 1; n <= 9; n++) {
		if (!$("#authorization" + n).prop('checked')) {
			authPassed = false;
		}
	}
	if ($("#firstName").val() === "") {
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must fill the 'First Name' field before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	} else if ($("#lastName").val() === "") {
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must fill the 'Last Name' field before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	} else if($("#programEligibilitySign").val() === ""){
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must sign the 'Program Eligibility' section before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	}else if($("#programEligibilitySignDate").val() === ""){
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must date the 'Program Eligibility' section before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	}else if (!authPassed) {
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must check all of the authorizations before you can submit.");
		$("#captchaResponse").fadeIn();
		return;
	}else if($("#authorizationSign").val() === ""){
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must sign the 'Authorization' section before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	}else if($("#authorizationSignDate").val() === ""){
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must date the 'Authorization' section before submitting.");
		$("#captchaResponse").fadeIn();
		return;
	} else if (rsp.length === 0) {
		$("#captchaResponse").addClass("alert-danger");
		$("#captchaMsg").text("Error:");
		$("#captchaFullMsg").text("You must complete the captcha below before you can submit.");
		$("#captchaResponse").fadeIn();
		return;
	} else {
		$('#' + form).fadeTo("fast", 0.5);
		$('#' + form).submit();
	}
}

function toggleResponseOnNo(id) {
	"use strict";
	//assume _yes and _no suffix are on each radio button
	//assume suffix _response following ID

	var yesInput = $("#" + id + "_Yes");
	var noInput = $("#" + id + "_No");
	var responseDIV = $("#" + id + "_response");

	//hide on page load if not in debug mode

	if (SHOWHIDDENFIELDS !== true) {
		responseDIV.hide();
	}

	yesInput.click(function() {
		if (yesInput.prop('checked')) {
			responseDIV.hide(500);
			clearFormElements(responseDIV);

		}
	});

	noInput.click(function() {
		if (noInput.prop('checked')) {
			responseDIV.show(500);
		}
	});

}

function appendValue(name, value) {
	"use strict";
	var formToAppend = $("#" + FORM_ID);
	var node = $("<input>").prop("type", "hidden").prop("name", name).val(value);
	return formToAppend.append(node);

}

function toggleYNResponse(id) {
	"use strict";
	//assume _yes and _no suffix are on each radio button
	//assume suffix _response following ID

	var yesInput = $("#" + id + "_Yes");
	var noInput = $("#" + id + "_No");
	var responseDIV = $("#" + id + "_response");

	//hide on page load if not in debug mode
	if (SHOWHIDDENFIELDS !== true) {
		responseDIV.hide();
	}

	yesInput.click(function() {
		if (yesInput.prop('checked')) {
			responseDIV.show(500);
		}
	});

	noInput.click(function() {
		if (noInput.prop('checked')) {
			responseDIV.hide(500);
			clearFormElements(responseDIV);
		}
	});

}

function clearFormElements(selector) {
	"use strict";
	$(selector).find(':input').each(function() {
		switch (this.type) {
			case 'password':
			case 'text':
			case 'textarea':
			case 'file':
			case 'select-one':
				$(this).val('');
				break;
			case 'checkbox':
			case 'radio':
				this.checked = false;
		}
	});
}

function getFormattedDate(date) {
	"use strict";
	var year = date.getFullYear();
	var month = (1 + date.getMonth()).toString();
	month = month.length > 1 ? month : '0' + month;
	var day = date.getDate().toString();
	day = day.length > 1 ? day : '0' + day;
	return month + '/' + day + '/' + year;
}
