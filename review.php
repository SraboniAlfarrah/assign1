<?php
session_start(); 
if( !isset($_SESSION['id']) )
{
	 header("location: stage1.php");
}
 $file['id']= $_SESSION['id'];
 foreach ($_SESSION['stage1'] as $key => $value) {
 $file[$key] = $value;
 }
 foreach ($_SESSION['stage2'] as $key => $value) {
 $file[$key] = $value;
 }
 foreach ($_POST as $key => $value) {
 $file[$key] = $value;
 $_SESSION['stage3'][$key]= $value;
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
                    <strong>PASSPORT APPLICATION - REVIEW ENROLMENT SUMMARY</strong>
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
                <label class="greenlabelCSS">Enrolment Date: 26/06/2018</label>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <label class="redlabelCSS">
                    <i>Reminder before submitting your application</i>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul>
                    <li>
                        <i>After you click submit, you are not allowed to modify your information.</i>
                    </li>
                    <li>
                        <i>Please visit
                            <b>BAGERHAT Branch</b> on any working day within the next 15 days for biometric capture except government
                            holiday.
                        </i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row horizontalLine form-group">
            <div class="col-xs-12">

            </div>
        </div>
    </div>
	<form method="post" action="show.php">
    <div class="card">
        <div class="h-container2 grid">
            <div class="row form-group">
                <div class="col-lg-6">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Personal Information Summary</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Name of Applicant:</label>
                        </div>
                        <div class="col-lg-9">
                            <label for="">
                                <b><?php echo $file['nameOfApplicant'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Second Part(Surname): </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['surname'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">First Part(Given Name): </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['givenName'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Gender: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['Gender'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Nationality: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['nationality'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Date of Birth: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['dateOfBirth'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Place of Birth: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['birthDistrict'].",".$file['countryOfBirth'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Father's Name: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['fathersName'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Mother's Name: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['mothersName'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Spouse's Name: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['spouseName'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">National ID No: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['nationalId'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Birth ID No.: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['birthId'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Old Passport No.: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['oldPassportNo'];?></b>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Passport Information Summary</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Applying in: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['Applying_in'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Passport Type: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['Passport_type'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Application Type: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b>NEW APPLICATION</b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Contact Information Summary</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Mobile No: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['mobileNo'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Present Address: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['district'].",".$file['policeStation'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Permanent Address: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['per_policeStation'].",".$file['per_district'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Email: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['email'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Payment Information Summary</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Payment Amount: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['amount'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Payment Date: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['paymentDate'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Receipt No.: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['reciptNo'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Bank Name: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['nameOfbank'];?></b>
                            </label>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Bank Branch: </label>
                        </div>
                        <div class="col-lg-6">
                            <label for="">
                                <b><?php echo $file['nameOfBranch'];?></b>
                            </label>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="h-container2 grid">
            <div class="row">
                <div class="col-lg-12">
                    <label for="">
                        <b>
                            <i class="redlabelCSS">Reminder: Bring old passport during collection of MRP; No correction after handover of delivery
                                slip without fee.</i>
                        </b>
                    </label>
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
                            <button type="button" class="btn btn-primary">
                                <a href="stage2.php" style="text-decoration: none; color: white">PREVIOUS PAGE</a>
                            </button>
                        </div>
                        <div class="col-lg-3">
                            <button type="submit" class="btn btn-success" name="save" value="append">
                                <span>SAVE</span>
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


