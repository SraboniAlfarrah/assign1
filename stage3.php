<?php
session_start(); 
if( !isset($_SESSION['id']) )
{
	 header("location: stage1.php");
}
 foreach ($_POST as $key => $value) {
 $_SESSION['stage2'][$key] = $value;
 }
 
	//unset($_SESSION['id']);
	//unset($_SESSION['stage1']);
	//unset($_SESSION['stage1']);
	
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
                    <strong>PASSPORT APPLICATION - STAGE 3</strong>
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
	<form action="reviewStage.php" method="post">
		<div class="card">
        <div class="h-container2 grid">
            <div class="row form-group">
                <div class="col-lg-6 dottedBorder">
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <h5 class="greenlabelCSS">Payment Information</h5>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Payment Type:</label>
                        </div>
                        <div class="col-lg-9">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Payment_Type" value="Online"> Online
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="Payment_Type" value="On Cash"> Non-Online
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-12">
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Skip Payment" name="Skip_Payment">
                                    <i>Skip Payment</i>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Amount:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-3">
                            <select class="form-control" id="amountUnit" name="amountUnit">
                                <option value="">-SELECT-</option>
                                <option value="Taka">Taka</option>
                                <option value="Dollar">Dollar</option>
                                <option value="Euro">Euro</option>
                                <option value="Pound">Pound</option>
                            </select>
                        </div>
                        <div class="col-lg-3">
                            <input type="number" class="form-control" id="amount" name="amount">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Date of Payment:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="paymentDate" name="paymentDate">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Receipt No:
                                <span class="redlabelCSS">
                                    <b>*</b>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="reciptNo" name="reciptNo">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Name of Bank: </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="nameOfbank" name="nameOfbank">
                                <option value="">-SELECT-</option>
                                <option value="A Bank">A Bank</option>
                                <option value="B Bank">B Bank</option>
                                <option value="C Bank">C Bank</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-3">
                            <label for="">Name of Branch: </label>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" id="nameOfBranch" name="nameOfBranch">
                                <option value="">-SELECT-</option>
                                <option value="AA Branch">AA Branch</option>
                                <option value="AB Branch">AB Branch</option>
                                <option value="BB Branch">BB Branch</option>
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
                            <button type="button" class="btn btn-primary"> <a href="stage2.php" style="text-decoration: none; color: white">PREVIOUS PAGE</a></button>
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
