<?php
require_once 'functions.php';

if (!isset($formdata)) {
    $formdata = array();
}

if (!isset($errors)) {
    $errors = array();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Create Organizer </title>
        <style>
            span.error{
                color: red;
            }
        </style>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class="content">
            <div class="container">
                <h1>Create  Organizer</h1><!--form title-->
                <?php
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createLocation.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="Name" class="col-md-2 control-label">Event Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Name" name="Name" value="<?php echoValue($formdata, "Name")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="LNameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Name');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Address" class="col-md-2 control-label">Venue</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Address" name="Address" value="<?php echoValue($formdata, "Address")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="LAddressError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Address');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerFName" class="col-md-2 control-label">Organizer Name</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="managerFName" name="managerFName" value="<?php echoValue($formdata, "managerFName")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="mNameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'managerFName');?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="managerEmail" class="col-md-2 control-label">Organizer Email</label>
                        <div class="col-md-5">
                            <input type="email" class="form-control" id="managerEmail" name="managerEmail" value="<?php echoValue($formdata, "managerEmail")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="mEmailError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'managerEmail');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="managerNumber" class="col-md-2 control-label">Organizer Number</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="managerNumber" name="managerNumber" value="<?php echoValue($formdata, "managerNumber")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="mNumError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'managerNumber');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="locationMaxCap" class="col-md-2 control-label">Max students</label>
                        <div class="col-md-5">
                            <input type="number" class="form-control" id="locationMaxCap" name="maxCap" value="<?php echoValue($formdata, "maxCap")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="capError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'maxCap');?>
                            </span>
                        </div>
                    </div>

               
                <button type="submit" name="createLocation" class="btn btn-primary">Add Organizer <span class="glyphicon glyphicon-send"></span</button>
                </form>
                <a class="btn btn-primary" href="viewLocations.php">Back</a><!--return/back button-->
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
