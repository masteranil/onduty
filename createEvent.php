<?php
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Connection.php';
require_once 'validateEvents.php';

$formdata = array();
$errors = array();

validateEvents(INPUT_POST, $formdata, $errors);

if (empty($errors)) {
    $eventname = $formdata['eventname'];
    $Department = $formdata['Department'];    
    $Date = $formdata['Date'];
    $Time = $formdata['Time'];
    $venue = $formdata['venue'];
   

    $event = new Event( $eventname, $Department, $Date, $Time, $venue);

    $connection = Connection::getInstance();

    $gateway = new EventTableGateway($connection);

    $id = $gateway->insert($event);

    header('Location: viewEvents.php');
}
else {
    require 'createEventForm.php';
}