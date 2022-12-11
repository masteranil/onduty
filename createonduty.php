<?php

require_once 'classes/ondutytablegateway.php';
require_once 'classes/Connection.php';
require_once 'validateonduty.php';

$formdata = array();
$errors = array();

validateonduty(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $studentname= $formdata['studentname'];
    $regno= $formdata['regno'];
    $eventname= $formdata['eventname'];
    $Department = $formdata['Department'];    
    $Date = $formdata['Date'];
    $Time = $formdata['time'];
    $venue =$formdata['venue'];
   

    $onduty = new onduty(-1, $studentname, $regno,  $eventname, $Department, $Date, $Time, $venue);

    $connection = Connection::getInstance();

    $gateway = new ondutytablegateway($connection);

    $id = $gateway->insert($onduty);

    header('Location: studentindex.php');
}
else {
    require 'createondutyform.php';
}