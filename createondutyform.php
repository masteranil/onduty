<?php
require_once 'functions.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$locations = $gateway->getLocations();

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
        <title>onduty form</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'studentheader.php'; ?><!--header content. file found in utils folder-->
        <div class = "content">
            <div class = "container">
                <h1>Create onudty Form</h1><!--form title-->
                <?php
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createonduty.php" method="POST" class="form-horizontal">
                <div class="form-group">
                        <label for="studentname" class="col-md-2 control-label">student name</label><!--event event name-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="studentname" name="studentname" value="<?php echoValue($formdata, "studentname")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="studentname Error" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'studentname');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="regno" class="col-md-2 control-label"> regno</label><!--event event name-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="regno" name="regno" value="<?php echoValue($formdata, "regno")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="regnoError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'regno');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="eventname" class="col-md-2 control-label">event name</label><!--event event name-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="eventname" name="eventname" value="<?php echoValue($formdata, "eventname")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="eventname Error" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'eventname');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Department" class="col-md-2 control-label">Department</label><!--event Department-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Department" name="Department" value="<?php echoValue($formdata, "Department")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="DepartmentError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Department');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Date" class="col-md-2 control-label">Date</label><!--start date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Date" name="Date" value="<?php echoValue($formdata, "Date")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="DateError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Date');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="time" class="col-md-2 control-label">time</label><!--time-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="time" name="time" value="<?php echoValue($formdata, "time")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="timeError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'time');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="venue" class="col-md-2 control-label">venue</label><!--event event name-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="venue" name="venue" value="<?php echoValue($formdata, "venue")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="venue Error" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'venue');?>
                            </span>
                        </div>
                    </div>
                    
                    <button type="submit" class = "btn btn-primary">apply onduty </button>
                    <a class="btn btn-primary navbar-btn" href = "studentviewevents.php">Back</a><!--register button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
