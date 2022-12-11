<?php
require_once 'classes/onduty.php';
require_once 'classes/ondutytablegateway.php';
require_once 'classes/Connection.php';


if (!isset($_GET['ID'])) {
    die("Illegal request");
}
$id = $_GET['ID'];

$connection = Connection::getInstance();

$gateway = new ondutytablegateway($connection);

$gateway->delete($id);

header('Location: adminviewstudents.php');