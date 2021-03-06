<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>IEC Employment Application</title>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/formstyle.css" rel="stylesheet" type="text/css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	<script src="https://www.google.com/recaptcha/api.js"></script>

</head>

<body>
	<form method="post" id="IECApplicationForm" enctype="multipart/form-data" novalidate>
		<?php
if (isset($_GET['position']) && $_GET['position']) {
    $position = $_GET['position'];
} else {
    $position = '';
}
	?>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="applicationDate" class="control-label">Application Date:
							</label>
							<input type="text" name="applicationDate" class="form-control datepicker" id="applicationDate" placeholder="MM/DD/YYYY">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label" for="positionApplyingFor">Position Applying For:</label>
							<input type="text" name="positionApplyingFor" class="form-control" id="positionApplyingFor" placeholder="Position" value="<?=$position?>">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label class="control-label" for="locationApplyingFor">Location:</label>
							<select class="form-control" id="locationApplyingFor" name="locationApplyingFor">
								<option value="Greenwood">Greenwood</option>
								<option value="Plainfield">Plainfield</option>
							</select>
						</div>
					</div>

				</div>
				<fieldset>
					<legend>Applicant Information</legend>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="firstName">First Name:</label>
								<input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="middleInitial">Middle Initial:</label>
								<input type="text" name="middleInitial" class="form-control" id="middleInitial" placeholder="Middle Initial" maxlength="1">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="lastName">Last Name:</label>
								<input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label class="control-label" for="phone">Phone Number:</label>
								<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="emailAddress" class="control-label">Email Address:</label>
								<input type="text" class="form-control" id="emailAddress" name="emailAddress" placeholder="Email Address">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group addresslinepadding addressline1desktop">
								<label class="control-label" for="applicantStreet">Address:</label>
								<input type="text" class="form-control " id="applicantStreet" placeholder="Street" style="display: block;" name="applicantStreet">
							</div>
							<div class="form-group addresslinepadding">

								<input type="text" class="form-control " placeholder="Apartment/Unit #" name="applicantAptUnit" id="applicantAptUnit">
							</div>
							<div class="form-group addresslinepadding">

								<input type="text" class="form-control" placeholder="City" style="display: block;" id="applicantCity" name="applicantCity">
							</div>
							<div class="form-group addresslinepadding addressline3desktop">

								<input type="text" class="form-control " placeholder="State" style="display: block;" name="applicantState" id="applicantState" maxlength="2">
							</div>
							<div class="form-group addressline4desktop addresslinepadding">
								<input type="text" class="form-control " placeholder="Zip Code" style="display: block;" id="applicantZip" name="applicantZip">
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="dateBeginWorking" class="control-label">Date you can begin working:</label>
								<input id="dateBeginWorking" type="text" class="form-control datepicker" name="dateBeginWorking" placeholder="MM/DD/YYYY">
							</div>
						</div>


						<div class="col-md-4">
							<div class="form-group">
								<label for="socialSecurityNumber" class="control-label">Social Security Number:</label>
								<input id="socialSecurityNumber" type="text" class="form-control" name="socialSecurityNumber" placeholder="XXX-XX-XXXX">
							</div>
						</div>

						<div class="col-md-2">
							<div class="form-group">
								<label for="desiredSalaryRangeFrom" class="control-label">Desired Salary Range From:</label>
								<input id="desiredSalaryRangeFrom" type="text" class="form-control" name="desiredSalaryRangeFrom" placeholder="From">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label for="desiredSalaryRangeTo" class="control-label">
									<br/>To:</label>
								<input id="desiredSalaryRangeTo" type="text" class="form-control" name="desiredSalaryRangeTo" placeholder="To">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="convictedOfCrime_Yes" class="control-label">Have you been convicted of a crime or plead guilty or no contest to any offense that has not been expunged by a court?</label>
								<p>
									<label>
										<input type="radio" name="convictedOfCrime" value="Yes" id="convictedOfCrime_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="convictedOfCrime" value="No" id="convictedOfCrime_No"> No
									</label>
									<br>
								</p>
								<p class="help-block">
									<em>Note: Criminal history convictions will not necessarily disqualify you from employment,
									but failure to disclose complete information about crimes not expunged will disqualify
									you from employment.</em>
								</p>
								<div id="convictedOfCrime_response">
									<label class="control-label" for="convictedOfCrimeExplanation">If yes, please explain:
									</label>
									<input type="text" class="form-control" id="convictedOfCrimeExplanation" placeholder="Explain" name="convictedOfCrimeExplanation">
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="citizenOfUS_Yes" class="control-label">Are you a citizen of the United States?</label>
								<p>
									<label>
										<input type="radio" name="citizenOfUS" value="Yes" id="citizenOfUS_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="citizenOfUS" value="No" id="citizenOfUS_No"> No
									</label>
									<br>
								</p>
								<div id="citizenOfUS_response">
									<label class="control-label" for="authorizedWorkInUS_Yes">If no, are you authorized to work in the U.S.?:</label>
									<p>
										<label>
											<input type="radio" name="authorizedWorkInUS" value="Yes" id="authorizedWorkInUS_Yes"> Yes
										</label>
										<br>
										<label>
											<input type="radio" name="authorizedWorkInUS" value="No" id="authorizedWorkInUS_No"> No
										</label>
										<br>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="previouslyWorkedIEC_Yes" class="control-label">Have you previously worked for this company?</label>
								<p>
									<label>
										<input type="radio" name="previouslyWorkedIEC" value="Yes" id="previouslyWorkedIEC_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="previouslyWorkedIEC" value="No" id="previouslyWorkedIEC_No"> No
									</label>
									<br>
								</p>
								<div id="previouslyWorkedIEC_response">
									<label class="control-label" for="previouslyWorkedIECWhenPosition">If yes, when/what position?
									</label>
									<input type="text" class="form-control" id="previouslyWorkedIECWhenPosition" placeholder="Explain" name="previouslyWorkedIECWhenPosition">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="criminalChargesPending_Yes" class="control-label">Any current criminal charges now pending against you?</label>
								<p>
									<label>
										<input type="radio" name="criminalChargesPending" value="Yes" id="criminalChargesPending_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="criminalChargesPending" value="No" id="criminalChargesPending_No"> No
									</label>
									<br>
								</p>
								<div id="criminalChargesPending_response">
									<label class="control-label" for="criminalChargesPendingExplanation">If yes, please explain:
									</label>
									<input type="text" class="form-control" id="criminalChargesPendingExplanation" placeholder="Explain" name="criminalChargesPendingExplanation">
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="disciplinaryActions_Yes" class="control-label">Have any disciplinary actions or investigations ever been initiated against you by any federal or state licensure board or regulatory body?</label>
								<p>
									<label>
										<input type="radio" name="disciplinaryActions" value="Yes" id="disciplinaryActions_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="disciplinaryActions" value="No" id="disciplinaryActions_No"> No
									</label>
									<br>
								</p>

								<div id="disciplinaryActions_response">
									<label class="control-label" for="disciplinaryActionsExplanation">If yes, please explain:
									</label>
									<input type="text" class="form-control" id="disciplinaryActionsExplanation" placeholder="Explain" name="disciplinaryActionsExplanation">
								</div>
							</div>
						</div>
					</div>
					<!-- End Row -->



					<!-- <div class="col-md-4">
					<div class="form-group">
						<label for="otherName" class="control-label">Other (Legal) Name(s):</label>
						<input type="text" class="form-control" id="otherName" name="otherName"
							   placeholder="Other (Legal) Name(s)">
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label class="control-label" for="cellPhone">Cell Phone Number:</label>
						<input type="text" class="form-control" id="cellPhone" name="cellPhone"
							   placeholder="Cell Phone Number">
					</div>
				</div>


				<div class="col-md-4">
					<div class="form-group">
						<label for="bestTimeOfDayToCall" class="control-label">Best Time of Day to Call:</label>
						<input type="text" class="form-control" id="bestTimeOfDayToCall" name="bestTimeOfDayToCall"
							   placeholder="Best Time of Day to Call">
					</div>
				</div> -->


				</fieldset>
				<fieldset>
					<legend>Education and Training:</legend>
					<div class="row">
						<div class="boxHeading">
							<h3>High School</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="highSchoolAttended">High School Attended:</label>
							<input type="text" id="highSchoolAttended" name="highSchoolAttended" class="form-control" placeholder="High School Attended">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="highSchoolCityCountyState">City, County, & State:
							</label>
							<input type="text" id="highSchoolCityCountyState" name="highSchoolCityCountyState" class="form-control" placeholder="City, County, & State">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="highSchoolGraduated">Graduated?</label>
							<select id="highSchoolGraduated" name="highSchoolGraduated" class="form-control">
								<option value="Not Selected">Select</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="highSchoolDiplomaGED">Diploma/GED:</label>
							<input type="text" id="highSchoolDiplomaGED" name="highSchoolDiplomaGED" class="form-control" placeholder="Diploma/GED">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>College</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="collegeAttended">College Attended:</label>
							<input type="text" id="collegeAttended" name="collegeAttended" class="form-control" placeholder="College Attended">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="collegeCityState">City, State:</label>
							<input type="text" id="collegeCityState" name="collegeCityState" class="form-control" placeholder="City, State">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="collegeAreaOfStudy">Areas of Study:</label>
							<input type="text" id="collegeAreaOfStudy" name="collegeAreaOfStudy" class="form-control" placeholder="Areas of Study">
							<label class="control-label" for="collegeGraduated">Graduated?</label>
							<select id="collegeGraduated" name="collegeGraduated" class="form-control">
								<option value="Not Selected">Select</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="collegeDegree">Degree:</label>
							<input type="text" id="collegeDegree" name="collegeDegree" class="form-control" placeholder="Degree">
							<label class="control-label" for="collegeDegreeMajor">Degree Major:</label>
							<input type="text" id="collegeDegreeMajor" name="collegeDegreeMajor" class="form-control" placeholder="Major">
							<label class="control-label" for="collegeDegreeMinor">Degree Minor:</label>
							<input type="text" id="collegeDegreeMinor" name="collegeDegreeMinor" class="form-control" placeholder="Minor">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>Other School</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="otherSchoolAttended">Trade/Business/Other School:
							</label>
							<input type="text" id="otherSchoolAttended" name="otherSchoolAttended" class="form-control" placeholder="Other School">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="otherSchoolCityState">City, State:</label>
							<input type="text" id="otherSchoolCityState" name="otherSchoolCityState" class="form-control" placeholder="City, State">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="otherSchoolAreaOfStudy">Areas of Study:</label>
							<input type="text" id="otherSchoolAreaOfStudy" name="otherSchoolAreaOfStudy" class="form-control" placeholder="Areas of Study">
							<label class="control-label" for="otherSchoolGraduated">Graduated?</label>
							<select id="otherSchoolGraduated" name="otherSchoolGraduated" class="form-control">
								<option value="Not Selected">Select</option>
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="otherSchoolDegree">Degree/Diploma/Certif.:</label>
							<input type="text" id="otherSchoolDegree" name="otherSchoolDegree" class="form-control" placeholder="Degree/Diploma/Certif.">
							<label class="control-label" for="otherSchoolDegreeMajor">Degree Major:</label>
							<input type="text" id="otherSchoolDegreeMajor" name="otherSchoolDegreeMajor" class="form-control" placeholder="Major">
							<label class="control-label" for="otherSchoolDegreeMinor">Degree Minor:</label>
							<input type="text" id="otherSchoolDegreeMinor" name="otherSchoolDegreeMinor" class="form-control" placeholder="Minor">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>License/Certification</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification1">Type of License/Certification:
							</label>
							<input type="text" id="licenseCertification1" name="licenseCertification1" class="form-control" placeholder="Type of License/Certification">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertNumber1">License/Cert. #:</label>
							<input type="text" id="licenseCertNumber1" name="licenseCertNumber1" class="form-control" placeholder="License/Cert. #">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification1StartDate">Effective Date:
							</label>
							<input type="text" id="licenseCertification1StartDate" name="licenseCertification1StartDate" class="form-control datepicker" placeholder="Effective Date">
							<label class="control-label" for="licenseCertification1EndDate">Expire Date:</label>
							<input type="text" id="licenseCertification1EndDate" name="licenseCertification1EndDate" class="form-control datepicker" placeholder="Expire Date">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification1StateIssuance">State of Issuance:
							</label>
							<input type="text" id="licenseCertification1StateIssuance" name="licenseCertification1StateIssuance" class="form-control" placeholder="State of Issuance">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>License/Certification</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification2">Type of License/Certification:
							</label>
							<input type="text" id="licenseCertification2" name="licenseCertification2" class="form-control" placeholder="Type of License/Certification">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertNumber2">License/Cert. #:</label>
							<input type="text" id="licenseCertNumber2" name="licenseCertNumber2" class="form-control" placeholder="License/Cert. #">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification2StartDate">Effective Date:
							</label>
							<input type="text" id="licenseCertification2StartDate" name="licenseCertification2StartDate" class="form-control datepicker" placeholder="Effective Date">
							<label class="control-label" id="licenseCertification2EndDate" for="licenseCertification2EndDate">Expire Date:</label>
							<input type="text" name="licenseCertification2EndDate" class="form-control datepicker" placeholder="End Date">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="licenseCertification2StateIssuance">State of Issuance:
							</label>
							<input type="text" id="licenseCertification2StateIssuance" name="licenseCertification2StateIssuance" class="form-control" placeholder="State of Issuance">
						</div>
					</div>
				</fieldset>
				<fieldset>

					<legend>Professional References</legend>
					<div class="row">
						<div class="boxHeading">
							<h3>Reference 1</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference1Name">Name:</label>
							<input type="text" id="reference1Name" name="reference1Name" class="form-control" placeholder="Name">
							<label class="control-label" for="reference1Company">Company:</label>
							<input type="text" id="reference1Company" name="reference1Company" class="form-control" placeholder="Company">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference1Telephone">Telephone:</label>
							<input type="text" id="reference1Telephone" name="reference1Telephone" class="form-control" placeholder="Telephone">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference1YrsKnown">Years Known:</label>
							<input type="text" id="reference1YrsKnown" name="reference1YrsKnown" class="form-control" placeholder="Years Known">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference1Relationship">Relationship:</label>
							<input type="text" id="reference1Relationship" name="reference1Relationship" class="form-control" placeholder="Relationship">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>Reference 2</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference2Name">Name:</label>
							<input type="text" id="reference2Name" name="reference2Name" class="form-control" placeholder="Name">
							<label class="control-label" for="reference2Company">Company:</label>
							<input type="text" id="reference2Company" name="reference2Company" class="form-control" placeholder="Company">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference2Telephone">Telephone:</label>
							<input type="text" id="reference2Telephone" name="reference2Telephone" class="form-control" placeholder="Telephone">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference2YrsKnown">Years Known:</label>
							<input type="text" id="reference2YrsKnown" name="reference2YrsKnown" class="form-control" placeholder="Years Known">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference2Relationship">Relationship:</label>
							<input type="text" id="reference2Relationship" name="reference2Relationship" class="form-control" placeholder="Relationship">
						</div>
					</div>
					<div class="row">
						<div class="boxHeading">
							<h3>Reference 3</h3>
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference3Name">Name:</label>
							<input type="text" id="reference3Name" name="reference3Name" class="form-control" placeholder="Name">
							<label class="control-label" for="reference3Company">Company:</label>
							<input type="text" id="reference3Company" name="reference3Company" class="form-control" placeholder="Company">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference3Telephone">Telephone:</label>
							<input type="text" id="reference3Telephone" name="reference3Telephone" class="form-control" placeholder="Telephone">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference3YrsKnown">Years Known:</label>
							<input type="text" id="reference3YrsKnown" name="reference3YrsKnown" class="form-control" placeholder="Years Known">
						</div>
						<div class="col-md-3">
							<label class="control-label" for="reference3Relationship">Relationship:</label>
							<input type="text" id="reference3Relationship" name="reference3Relationship" class="form-control" placeholder="Relationship">
						</div>
					</div>
				</fieldset>
				<br />
				<fieldset>
					<legend>Employment History</legend>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="contactPresentEmployer_Yes" class="control-label">May we contact your present employer?
								</label>
								<p>
									<label>
										<input type="radio" name="contactPresentEmployer" value="Yes" id="contactPresentEmployer_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="contactPresentEmployer" value="No" id="contactPresentEmployer_No"> No
									</label>
									<br>
								</p>
								<div id="contactPresentEmployer_response">
									<label class="control-label" for="contactPresentEmployerExplanation">If no, please explain:
									</label>
									<input type="text" class="form-control" id="contactPresentEmployerExplanation" placeholder="Explain" name="contactPresentEmployerExplanation">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							List your last three employers, starting with the most recent, including military experience. Explain any gaps in employment in the comments section below.

							<div id="employmentHistory">
								<div class="row">
									<div class="boxHeading">
										<h3>Employer/Activity 1</h3>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="nameAddressEmployer1">Name and complete address of Employer:
											</label>
											<textarea class="form-control" name="nameAddressEmployer1" rows="3" id="nameAddressEmployer1" style="width:100%"></textarea>
											<label class="control-label" for="phoneEmployer1">Phone:</label>
											<input type="text" class="form-control" id="phoneEmployer1" placeholder="Phone" name="phoneEmployer1">
											<label class="control-label" for="salaryEmployer1Start">Salary:</label>
											<br/>
											<input type="text" class="form-control" id="salaryEmployer1Start" placeholder="Starting Salary" name="salaryEmployer1Start" style="width:48%;display:inline-block">
											<input type="text" class="form-control" id="salaryEmployer1Ending" placeholder="Ending Salary" name="salaryEmployer1Ending" style="width:48%;display:inline-block">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="dateStartEmployer1">Dates of Position:</label>
											<br/>
											<input type="text" class="form-control datepicker" id="dateStartEmployer1" placeholder="Start Date" name="dateStartEmployer1" style="width:45%;display:inline-block"> to
											<input type="text" class="form-control datepicker" id="dateEndEmployer1" placeholder="End Date" name="dateEndEmployer1" style="width:45%; display:inline-block">
										</div>
										<label class="control-label" for="titleEmployer1">Title:</label>
										<input type="text" class="form-control" id="titleEmployer1" placeholder="Title" name="titleEmployer1">
										<label class="control-label" for="reasonForLeavingEmployer1">Reason for Leaving:</label>
										<textarea class="form-control" name="reasonForLeavingEmployer1" rows="3" id="reasonForLeavingEmployer1" style="width:100%"></textarea>

									</div>
									<div class="col-md-4">
										<label class="control-label" for="dutiesEmployer1">Duties:</label>
										<textarea class="form-control" name="dutiesEmployer1" rows="3" id="dutiesEmployer1" style="width:100%"></textarea>
										<label class="control-label" for="supervisorEmployer1">Supervisor:</label>
										<input type="text" class="form-control" id="supervisorEmployer1" placeholder="Supervisor" name="supervisorEmployer1">
										<label class="control-label" for="supervisorPhone1Employer1">Supervisor Phone #1:</label>
										<input type="text" class="form-control" id="supervisorPhone1Employer1" placeholder="Supervisor Phone #1" name="supervisorPhone1Employer1">
										<label class="control-label" for="supervisorPhone2Employer1">Supervisor Phone #2:</label>
										<input type="text" class="form-control" id="supervisorPhone2Employer1" placeholder="Supervisor Phone #2" name="supervisorPhone2Employer1">
									</div>
								</div>
								<div class="row">
									<div class="boxHeading">
										<h3>Employer/Activity 2</h3>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="nameAddressEmployer2">Name and complete address of Employer:
											</label>
											<textarea class="form-control" name="nameAddressEmployer2" rows="3" id="nameAddressEmployer2" style="width:100%"></textarea>
											<label class="control-label" for="phoneEmployer2">Phone:</label>
											<input type="text" class="form-control" id="phoneEmployer2" placeholder="Phone" name="phoneEmployer2">
											<label class="control-label" for="salaryEmployer2Start">Salary:</label>
											<br/>
											<input type="text" class="form-control" id="salaryEmployer2Start" placeholder="Starting Salary" name="salaryEmployer2Start" style="width:48%;display:inline-block">
											<input type="text" class="form-control" id="salaryEmployer2Ending" placeholder="Ending Salary" name="salaryEmployer2Ending" style="width:48%;display:inline-block">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="dateStartEmployer2">Dates of Position:</label>
											<br/>
											<input type="text" class="form-control datepicker" id="dateStartEmployer2" placeholder="Start Date" name="dateStartEmployer2" style="width:45%;display:inline-block"> to
											<input type="text" class="form-control datepicker" id="dateEndEmployer2" placeholder="End Date" name="dateEndEmployer2" style="width:45%; display:inline-block">
										</div>
										<label class="control-label" for="titleEmployer2">Title:</label>
										<input type="text" class="form-control" id="titleEmployer2" placeholder="Title" name="titleEmployer2">
										<label class="control-label" for="reasonForLeavingEmployer2">Reason for Leaving:</label>
										<textarea class="form-control" name="reasonForLeavingEmployer2" rows="3" id="reasonForLeavingEmployer2" style="width:100%"></textarea>

									</div>
									<div class="col-md-4">
										<label class="control-label" for="dutiesEmployer2">Duties:</label>
										<textarea class="form-control" name="dutiesEmployer2" rows="3" id="dutiesEmployer2" style="width:100%"></textarea>
										<label class="control-label" for="supervisorEmployer2">Supervisor:</label>
										<input type="text" class="form-control" id="supervisorEmployer2" placeholder="Supervisor" name="supervisorEmployer2">
										<label class="control-label" for="supervisorPhone1Employer2">Supervisor Phone #1:</label>
										<input type="text" class="form-control" id="supervisorPhone1Employer2" placeholder="Supervisor Phone #1" name="supervisorPhone1Employer2">
										<label class="control-label" for="supervisorPhone2Employer2">Supervisor Phone #2:</label>
										<input type="text" class="form-control" id="supervisorPhone2Employer2" placeholder="Supervisor Phone #2" name="supervisorPhone2Employer2">
									</div>
								</div>
								<div class="row">
									<div class="boxHeading">
										<h3>Employer/Activity 3</h3>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="nameAddressEmployer3">Name and complete address of Employer:
											</label>
											<textarea class="form-control" name="nameAddressEmployer3" rows="3" id="nameAddressEmployer3" style="width:100%"></textarea>
											<label class="control-label" for="phoneEmployer3">Phone:</label>
											<input type="text" class="form-control" id="phoneEmployer3" placeholder="Phone" name="phoneEmployer3">
											<label class="control-label" for="salaryEmployer3Start">Salary:</label>
											<br/>
											<input type="text" class="form-control" id="salaryEmployer3Start" placeholder="Starting Salary" name="salaryEmployer3Start" style="width:48%;display:inline-block">
											<input type="text" class="form-control" id="salaryEmployer3Ending" placeholder="Ending Salary" name="salaryEmployer3Ending" style="width:48%;display:inline-block">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label class="control-label" for="dateStartEmployer3">Dates of Position:</label>
											<br/>
											<input type="text" class="form-control datepicker" id="dateStartEmployer3" placeholder="Start Date" name="dateStartEmployer3" style="width:45%;display:inline-block"> to
											<input type="text" class="form-control datepicker" id="dateEndEmployer3" placeholder="End Date" name="dateEndEmployer3" style="width:45%; display:inline-block">
										</div>
										<label class="control-label" for="titleEmployer3">Title:</label>
										<input type="text" class="form-control" id="titleEmployer3" placeholder="Title" name="titleEmployer3">
										<label class="control-label" for="reasonForLeavingEmployer3">Reason for Leaving:</label>
										<textarea class="form-control" name="reasonForLeavingEmployer3" rows="3" id="reasonForLeavingEmployer3" style="width:100%"></textarea>

									</div>
									<div class="col-md-4">
										<label class="control-label" for="dutiesEmployer3">Duties:</label>
										<textarea class="form-control" name="dutiesEmployer3" rows="3" id="dutiesEmployer3" style="width:100%"></textarea>
										<label class="control-label" for="supervisorEmployer3">Supervisor:</label>
										<input type="text" class="form-control" id="supervisorEmployer3" placeholder="Supervisor" name="supervisorEmployer3">
										<label class="control-label" for="supervisorPhone1Employer3">Supervisor Phone #1:</label>
										<input type="text" class="form-control" id="supervisorPhone1Employer3" placeholder="Supervisor Phone #1" name="supervisorPhone1Employer3">
										<label class="control-label" for="supervisorPhone2Employer3">Supervisor Phone #2:</label>
										<input type="text" class="form-control" id="supervisorPhone2Employer3" placeholder="Supervisor Phone #2" name="supervisorPhone2Employer3">
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label class="control-label" for="employmentComments">Comments (including explanation for any gaps in employment):</label>
											<textarea class="form-control" name="employmentComments" rows="5" id="employmentComments" style="width:100%"></textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="dischargedFired_Yes" class="control-label">Have you ever been discharged from employment or been asked to resign by an employer?</label>
											<p>
												<label>
													<input type="radio" name="dischargedFired" value="Yes" id="dischargedFired_Yes"> Yes
												</label>
												<br>
												<label>
													<input type="radio" name="dischargedFired" value="No" id="dischargedFired_No"> No
												</label>
												<br>
											</p>
											<div id="dischargedFired_response">
												<label class="control-label" for="dischargedFiredExplanation">If yes, please explain:
												</label>
												<input type="text" class="form-control" id="dischargedFiredExplanation" placeholder="Explain" name="dischargedFiredExplanation">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</fieldset>

				<!-- <fieldset>
					<legend>Skills and Qualifications</legend>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="specialSkills">Summarize any special skills and qualifications acquired from employment or other experiences that may qualify you to work with our company. Include experience with computer software or other equipment:</label>
								<textarea class="form-control" name="specialSkills" rows="3" id="specialSkills" style="width:100%"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="control-label" for="memberships">Memberships in applicable professional, trade, business, or civic associations:</label>
								<textarea class="form-control" name="memberships" rows="2" id="memberships" style="width:100%"></textarea>
							</div>
						</div>
					</div>
				</fieldset> -->
				<fieldset>
					<legend>Driving Record</legend>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="driversLicenseNumber" class="control-label">Driver's License Number:</label>
								<input type="text" class="form-control" id="driversLicenseNumber" name="driversLicenseNumber" placeholder="Driver's License Number">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="driversLicenseState" class="control-label">State Issued:</label>
								<input type="text" class="form-control" id="driversLicenseState" name="driversLicenseState" placeholder="State Issued">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="expirationDate" class="control-label">Expiration Date:</label>
								<input type="text" class="form-control datepicker" id="expirationDate" name="expirationDate" placeholder="Expiration Date">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label for="driversLicenseSuspendedRevoked_Yes" class="control-label">Have you ever had your driver's license suspended or revoked?</label>
								<p>
									<label>
										<input type="radio" name="driversLicenseSuspendedRevoked" value="Yes" id="driversLicenseSuspendedRevoked_Yes"> Yes
									</label>
									<br>
									<label>
										<input type="radio" name="driversLicenseSuspendedRevoked" value="No" id="driversLicenseSuspendedRevoked_No"> No
									</label>
									<br>
								</p>
								<p class="help-block">
									<em>Dependent upon the position, an acceptable driving record may be required.</em>
								</p>
								<div id="driversLicenseSuspendedRevoked_response">
									<label class="control-label" for="driversLicenseSuspendedRevokedExplanation">If yes, please explain:
									</label>
									<input type="text" class="form-control" id="driversLicenseSuspendedRevokedExplanation" placeholder="Explain" name="driversLicenseSuspendedRevokedExplanation">
								</div>
							</div>
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Program Eligibility</legend>
					<div class="row">
						<div class="col-md-12" style="text-align: justify">I certify that I am not presently, nor have I previously been, excluded, debarred, suspended, sanctioned, or otherwise ineligible to participate in the Medicare or Medicaid Programs or Federal procurement and non-procurement programs. To the best
							of my knowledge, I am not currently under investigation by any Federal or State authority. I will inform Methodist Sports Medicine of any change in provider eligibility status. I understand that application consideration, employment or continued
							employment is contingent upon the certifications identified.


						</div>


					</div>
					<br>
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="programEligibilitySign" class="control-label">Sign Electronically (Type your full name):
								</label>
								<input type="text" class="form-control" id="programEligibilitySign" name="programEligibilitySign" placeholder="Full name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="programEligibilitySignDate" class="control-label">Today's Date:</label>
								<input type="text" class="form-control datepicker" id="programEligibilitySignDate" name="programEligibilitySignDate" placeholder="Today's Date">
							</div>
						</div>
					</div>
					<br>
				</fieldset>
				<!-- <fieldset>
					<legend>Authorization</legend>
					<div class="row">
						<div class="col-md-12" style="text-align: justify"><span style="font-weight:bold">As a condition of employment consideration, please read and check each paragraph below and type your name to sign the application electronically, prior to submission.</span>
							<br>
							<br>

							<input type="checkbox" name="authorization1" id="authorization1" value="Yes" title="Authorization 1"> I understand that any false statement or fact omission on this application and/or other documents related to my qualifications and background, such as resume, vitae, etc., may be grounds for not hiring, or for terminating me after I begin employment.
							My signature below indicates that all statements made on this employment application are correct, complete, current, and made in good faith. I will attach information as necessary to meet disclosure requirements.
							<br>
							<br>

							<input type="checkbox" name="authorization2" id="authorization2" value="Yes" title="Authorization 2"> I understand that employment with Methodist Sports Medicine (MSM) is governed by the principle of At-Will employment, meaning that at the option of MSM or me, employment and compensation can be terminated, with or without cause, and with or without
							notice, at any time. This At-Will employment relationship may not be changed by any written document or by conduct unless such change is specifically acknowledged in writing by an authorized executive of MSM.
							<br>
							<br>
							<input type="checkbox" name="authorization3" id="authorization3" value="Yes" title="Authorization 3"> I understand I may be offered employment in advance of certain background checks and investigations, and reference checking being completed. If such inquiries establish information, which makes me unqualified in MSM’s opinion, I understand that
							my employment will be terminated.
							<br>
							<br>

							<input type="checkbox" name="authorization4" id="authorization4" value="Yes" title="Authorization 4"> I consent to the release of information given to MSM from current and former employers, schools, law enforcement agencies, and other organizations and individuals, relevant to my consideration of employment. Such parties may rely upon this authorization
							as a waiver of any claim whatsoever I may have, and release all parties from all liability for any damages that may result from seeking or furnishing such information.
							<br>
							<br>

							<input type="checkbox" name="authorization5" id="authorization5" value="Yes" title="Authorization 5"> If employed, I understand that I will be subject to and agree to abide by all of MSM’s policies, procedures, and rules, including those described in the Employee Handbook, Code of Conduct, Human Resources Policies and Procedures and other such
							documents.
							<br>
							<br>

							<input type="checkbox" name="authorization6" id="authorization6" value="Yes" title="Authorization 6"> I agree that MSM may, without my further consent, make lawful use of any video image or photographic picture it may make or cause to be taken of me.
							<br>
							<br>

							<input type="checkbox" name="authorization7" id="authorization7" value="Yes" title="Authorization 7"> I understand that I may be required to submit to substance abuse testing prior to my employment by MSM and periodic testing thereafter at the discretion of MSM, in accordance with applicable MSM policies and practices. I agree to such testing
							and understand that refusal to submit to substance abuse testing or to authorize the release of the results of such testing to MSM will result in termination of my employment with MSM.
							<br>
							<br>

							<input type="checkbox" name="authorization8" id="authorization8" value="Yes" title="Authorization 8"> I understand that the facilities and grounds at MSM are drug and tobacco-free and I agree to comply with this requirement.
							<br>
							<br>


							<input type="checkbox" name="authorization9" id="authorization9" value="Yes" title="Authorization 9"> I understand that my work hours, schedule, assignments, etc., may be changed to meet the business needs of MSM.
							<br>
							<br>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label for="authorizationSign" class="control-label">Sign Electronically (Type your full name):
										</label>
										<input type="text" class="form-control" id="authorizationSign" name="authorizationSign" placeholder="Full name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label for="authorizationSignDate" class="control-label">Today's Date:</label>
										<input type="text" class="form-control datepicker" id="authorizationSignDate" name="authorizationSignDate" placeholder="Today's Date">
									</div>
								</div>
							</div>

						</div>
					</div>
				</fieldset> -->
				<fieldset>
					<legend>Resume Upload</legend>
					<div class="row">
						<div class="col-md-12">
							<label for="uploadResume_Yes" class="control-label">Would you like to attach a current resume?</label>
							<p>
								<label>
									<input type="radio" name="uploadResume" value="Yes" id="uploadResume_Yes"> Yes
								</label>
								<br>
								<label>
									<input type="radio" name="uploadResume" value="No" id="uploadResume_No"> No
								</label>
								<br>
							</p>
							<div id="uploadResume_response">
								<input type="file" name="resumeFile">
								<br>

							</div>
						</div>
					</div>
				</fieldset>



				<fieldset>
					<legend>Captcha</legend>
					<div class="container">
						<div class="alert alert-danger" id="captchaResponse" style="display: none;">
							<!-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> -->
							<strong><span id="captchaMsg"></span></strong> <span id="captchaFullMsg"></span>
						</div>
					</div>
					<div class="g-recaptcha" data-sitekey="6Ldc4RITAAAAALHmIZ4z9PeefegpKbGhdfrAl38Z"></div>

					<div class="row">
						<div class="col-md-12">
							<br>
							<button type="submit" class="btn btn-default" id="formSubmitButton">Submit Application</button>
						</div>
					</div>


					<br>
					<br>
				</fieldset>
			</div>
	</form>


	<!-- Bootstrap core / JavaScript
================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css">
	<script src="assets/js/jquery-ui/external/jquery/jquery.js"></script>
	<script src="assets/js/jquery-ui/jquery-ui.min.js"></script>
	<!-- jQuery Validate -->
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/jquery.validate.additional-methods.js"></script>
	<!-- Custom Form Script Javascript -->
	<script type="text/javascript" src="assets/js/app.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="assets/js/ie10-viewport-bug-workaround.js"></script>

</body>

</html>
