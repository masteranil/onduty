<?php
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$id = $_POST['id'];
$locationName = $_POST['Name'];
$locationAddress = $_POST['Address'];
$managerFName = $_POST['ManagerFName'];

$managerEmail = $_POST['ManagerEmail'];
$managerNumber = $_POST['ManagerNumber'];
$locationMaxCap = $_POST['MaxCapacity'];

$location = new Location($id, $locationName, $locationAddress, $managerFName,   $managerEmail, $managerNumber, $locationMaxCap);

$connection = Connection::getInstance();

$gateway = new LocationTableGateway($connection);

$id = $gateway->update($location);

header('Location: viewLocations.php');
