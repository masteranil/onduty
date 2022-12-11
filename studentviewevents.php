<?php

require_once 'utils/functions.php';
require_once 'classes/Event.php';
require_once 'classes/EventTableGateway.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/connection.php';



$connection = Connection::getInstance();
$gateway = new EventTableGateway($connection);

$statement = $gateway->getEvents();

start_session();




?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sona events</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
    </head>
    <body>
        <?php require 'studentheader.php'; ?>
        <div class = "content">
            <div class = "container">
                <?php
                if (isset($message)) {
                    echo '<p>'.$message.'</p>';
                }
                ?>
                <h2>Our Event List</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Event No</th>
                            <th>Event Name</th>
                            <th>Event Description</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>venue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            echo '<td>' . $row['EventID'] . '</td>';
                            echo '<td>' . $row['eventname'] . '</td>';
                            echo '<td>' . $row['Department'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['Time'] . '</td>';
                            echo '<td>' . $row['venue'] . '</td>';
                           ;
                            

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>

                <a class="btn btn-primary text-center" href = "createondutyform.php ">Apply for ONDUTY</a><!--register button-->
            </div>
        </div>

        <?php require 'utils/footer.php'; ?>
    </body>
</html>
