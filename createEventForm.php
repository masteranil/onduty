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
        <title>Create Event Form</title>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php'; ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content">
            <div class = "container">
                <h1>Create Event Form</h1><!--form title-->
                <?php
                if (isset($errorMessage)) {
                    echo '<p>Error: ' . $errorMessage . '</p>';
                }
                ?>
                <form action="createEvent.php" method="POST" class="form-horizontal">
                    <div class="form-group">
                        <label for="eventname" class="col-md-2 control-label">eventname</label><!--event eventname-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="eventname" name="eventname" value="<?php echoValue($formdata, "eventname")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="eventnameError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'eventname');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Department" class="col-md-2 control-label">Description</label><!--event Department-->
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
                        <label for="Time" class="col-md-2 control-label">Time</label><!--end date-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="Time" name="Time" value="<?php echoValue($formdata, "Time")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="TimeError" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'Time');?>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="venue" class="col-md-2 control-label">venue</label><!--cost-->
                        <div class="col-md-5">
                            <input type="text" class="form-control" id="venue" name="venue" value="<?php echoValue($formdata, "venue")?>" /><!--input-->
                        </div>
                        <div class="col-md-4">
                            <span id="venue" class="error"><!--error message for invalid input-->
                                <?php echoValue($errors, 'venue');?>
                            </span>
                        </div>
                    </div>
                    
                    <button type="submit" class = "btn btn-primary">Create Event </button>
                    <a class="btn btn-primary navbar-btn" href = "viewEvents.php">Back</a><!--register button-->
                </form>
            </div>
        </div>
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
