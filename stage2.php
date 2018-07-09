<?php
session_start(); 
if( !isset($_SESSION['id']) )
{
	 header("location: stage1.php");
}
 foreach ($_POST as $key => $value) {
 $_SESSION['stage1'][$key] = $value;
 }
	
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
                    <strong>PASSPORT APPLICATION - STAGE 2</strong>
                </h6>
            </div>
        </div>
    </div>
    <div class="h-container2 grid">
        <div class="row">
            <div class="col-xs-12">
                <label class="greenlabelCSS">Online application ID: OA000000004008216</label>
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
	<form action="stage3.php" method="post">
    <div class="card">
        <div class="h-container2 grid">
            <div class="row form-group">
                <div class="col-lg-6 dottedBorder">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Applicant Contact Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="countryText">Office No:</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="officeNo" name="officeNo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="countryText">Residence No:</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="residenceNo" name="residenceNo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="countryText">Mobile No:</label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="mobileNo" name="mobileNo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Emergency COntact Person's Details</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Name:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nameOfContact" name="nameOfContact">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Country:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="countryofContact" name="countryofContact">
                                <option value="">Select One</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="USA">USA</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Same As Permanent Address" name="per_address">
                                    <i>Same as permanent address</i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Same as present address" name="pre_address" >
                                    <i>Same as present address</i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Village/House: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="village3" name="em_village">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Road/Block/Sector: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="road3" name="em_road">
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
                            <select class="form-control" id="district3" name="em_district">
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
                            <select class="form-control" id="policeStation3" name="em_policeStation">
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
                            <select class="form-control" id="postOffice3" name="em_postOffice">
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
                            <label for="">Contact No:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="contactOfContact" name="em_contactOfContact">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Email: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="email" class="form-control" id="emailOfContact" name="em_emailOfContact">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Relationship:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="relationshipOfContact" name="em_relationshipOfContact">
                                <option value="">Select One</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunt">Aunt</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <h5 class="greenlabelCSS">Old Passport Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Passport No: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="oldPassportNo" name="oldPassportNo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Place of issue: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="placeOfIssue" name="placeOfIssue">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Date of issue: </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="dateOfIssue" name="dateOfIssue">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Re-issue Reason: </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="resissue" name="resissue">
                                <option value="">Select One</option>
                                <option value="Expired">Expired</option>
                                <option value="Page Full">Page Full</option>
                                <option value="Digitalization">Digitalization</option>
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
                        <div class="col-lg-6">
                            <button type="button" class="btn btn-primary"> <a href="stage1.php" style="text-decoration: none; color: white">PREVIOUS PAGE</a></button>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-success">
                                <span>SAVE AND NEXT</span>
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
