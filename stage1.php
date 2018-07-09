<?php
session_start(); // Session starts here.
 $_SESSION['id'] = "OA000000004008216";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="stage1.css" />
    <script src="main.js"></script>
</head>

<body>
    <div class="h-container grid">
        <div class="row">
            <div class="col-xs-12">
                <h6>
                    <strong>PASSPORT APPLICATION - STAGE 1</strong>
                </h6>
            </div>
        </div>
    </div>
    <div class="h-container2 grid">

        <div class="row">
            <div class="col-xs-12">
                <label class="redlabelCSS">Before filling up the online application form read the
                    <a href="#" class="guidelinesCSS">guidelines</a> carefully.</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <label>Fields marked with
                    <span class="redlabelCSS">(*)</span> are mandatory</label>
            </div>
        </div>
        <div class="row horizontalLine form-group">
            <div class="col-xs-12">

            </div>
        </div>
    </div>
	<form action="stage2.php" method="post">
    <div class="card">
        <div class="h-container2 grid">
            <div class="row form-group">
                <div class="col-lg-6 dottedBorder">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Passport Application Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="countryText">Applying in:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
						<input type="date" class="form-control" id="countryApplying"  name="Applying_in">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Application Type:</label>
                        </div>
                        <div class="col-lg-9">
                            <label for="">NEW APPLICATION</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="countryText">Passport Type:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="passportType" name="Passport_type">
                                <option value="" >Select one</option>
                                <option value="Regular">Regular</option>
                                <option value="Official">Official</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Delivery Type:</label>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Delivery_Type" value="Regular">Regular
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Delivery_Type" value="Express">Express
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Personal Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Name of applicant:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nameOfApplicant" name="nameOfApplicant">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">First Part (Given Name): </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="givenName" name="givenName">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Second Part (Surname):
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="surname" name="surname">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <div class="form-check-inline">
                                <label for="" class="form-check-label gurdianMargin">Gurdian </label>
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="adapted" name="adapted">
                                    <i class="redlabelCSS">
                                        <b>"Tick"</b><!--$_POST['test'] == 'value1'-->
                                    </i> only if Applicant is legally adapted
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Father's Name:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="fathersName" name="fathersName">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Father's Nationality:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="fathersNationality" name="fathersNationality">
                                <option value="">Select One</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="American">American</option>
                                <option value="Canadian">Canadian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Father's Profession:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="fathersProfession" name="fathersProfession">
                                <option value="">Select One</option>
                                <option value="Retired">Retired</option>
                                <option value="Govt. Service Holder">Govt. Service Holder</option>
                                <option value="private Service Holder">private Service Holder</option>
                                <option value="Business">Business</option>
                                <option value="Farmer">Farmer</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Mother's Name:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="mothersName" name="mothersName">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Mother's Nationality:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="mothersNationality" name="mothersNationality">
                                <option value="">Select One</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="American">American</option>
                                <option value="Canadian">Canadian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Mother's Profession:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="mothersProfession" name="mothersProfession">
                                <option value="">Select One</option>
								<option value="Housewife">House-wife</option>
                                <option value="Retired">Retired</option>
                                <option value="Govt. Service Holder">Govt. Service Holder</option>
                                <option value="private Service Holder">private Service Holder</option>
                                <option value="Business">Business</option>                            
                                <option value="others">others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Spouse's Name: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="spouseName" name="spouseName">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Spouse's Nationality: </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="spouseNationality" name="spouseNationality">
                                <option value="">Select One</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="American">American</option>
                                <option value="Canadian">Canadian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Spouse's Profession: </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="spouseProfession" name="spouseProfession">
                                <option value="">Select One</option>
								<option value="Housewife">House-wife</option>
                                <option value="Retired">Retired</option>
                                <option value="Govt. Service Holder">Govt. Service Holder</option>
                                <option value="private Service Holder">private Service Holder</option>
                                <option value="Business">Business</option>                            
                                <option value="others">others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Marital Status:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="maritalStatus" name="maritalStatus">
                                <option>Select One</option>
                                <option>Married</option>
                                <option>single</option>
                                <option>Divorced</option>
                                <option>widowed</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Applicant's Profession:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="applicantProfession" name="applicantProfession">
                                 <option value="">Select One</option>
                                 <option value="Student">Student</option>
								<option value="Housewife">House-wife</option>
                                <option value="Retired">Retired</option>
                                <option value="Govt. Service Holder">Govt. Service Holder</option>
                                <option value="private Service Holder">private Service Holder</option>
                                <option value="Business">Business</option>                            
                                <option value="others">others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Country of Birth:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="countryOfBirth" name="countryOfBirth">
                                <option value="">Select One</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Birth District:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="birthDistrict" name="birthDistrict">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                                <option value="Rangpur">Rangpur</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Date of Birth:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Gender:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Gender" value="Male">Male
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Gender" value="Female">Female
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Gender"value="Other">Other
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Birth ID No.:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="birthId" name="birthId">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">National ID No: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nationalId" name="nationalId">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Tax ID No.: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="taxId" name="taxId">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Height:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="cm" name="Height_cm">
                        </div>
                        <div class="col-lg-1">
                            <label for="">cm</label>
                        </div>
                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="inch" name="Height_inch">
                        </div>
                        <div class="col-lg-1">
                            <label for="">inch</label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Religion:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="religion" name="religion">
                                <option value="">Select One</option>
                                <option value="Islam">Islam</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Christian">Christian</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Nonreligious">Nonreligious</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Email:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Citizenship Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Nationality:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="nationality" name="nationality">
                                <option value="">Select One</option>
                                <option value="Bangladeshi">Bangladeshi</option>
                                <option value="American">American</option>
                                <option value="Canadian">Canadian</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Citizenship Status:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="citizenshipStatus" name="citizenshipStatus">
                                <option value="">Select One</option>
                                <option value="By Born Bangladeshi</">By Born Bangladeshi</option>
                                <option value="Non-Bangladeshi Permanent">Non-Bangladeshi Permanent</option>
                                <option value="Non-Bangladeshi Temporary">Non-Bangladeshi Temporary</option>
                                <option value="Refugee">Refugee</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Dual Citizenship:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Dual_Citizenship" value="Yes">Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Dual_Citizenship"value="No">No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Present Address</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Village/House: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="village" name="village">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Road/Block/Sector: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="road" value="road">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">District:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="district" name="district">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Police Station:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="policeStation"name="policeStation">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Post Office:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="postOffice" name="postOffice">
                               <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Permanent Address</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="yes" name="same_as_Permanent"> Same as above
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Village/House: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="village" name="per_village">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Road/Block/Sector: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="road" name="per_road">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">District:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="district2" name="per_district">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Police Station:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="policeStation2" name="per_policeStation">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Post Office:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="postOffice2" name="per_postOffice">
                                <option value="">select One</option>
                                <option value="Barishal">Barishal</option>
                                <option value="Chattagram">Chattagram</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Khulna">Khulna</option>
                                <option value="Mymensingh">Mymensingh</option>
                                <option value="Rajshahi">Rajshahi</option>
                                <option value="Sylhet">Sylhet</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-container2 grid">
            <div class="row">
                <div class="col-lg-6">

                </div>
                <div class="col-lg-6">
                    <div class="row form-group buttonAlign">
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-success">
                                <span>SAVE AND NEXT</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</form>
</body>

</html>
