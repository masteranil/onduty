<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/Location.php';
require_once 'classes/LocationTableGateway.php';
require_once 'classes/Connection.php';

$connection = Connection::getInstance();
$gateway = new LocationTableGateway($connection);

$statement = $gateway->getLocations();

start_session();

if (!is_logged_in()) {
    header("Location: studentlogin_form.php");
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>sona organizers</title>
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
                <table class ="table table-hover">
                    <thead>
                        <tr>
                            <!--table label-->
                            <!--this will only show the detail of a location with specific ID chosen by the user-->
                            
                            <th>Event Name</th>
                            <th>Venue</th>                    
                            <th>organizer  Name</th>
                          
                            <th>organizer Email</th>
                            <th>organizer Number</th>
                            <th>Max students</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <!--table contents-->
                        <?php
                        $row = $statement->fetch(PDO::FETCH_ASSOC);
                        while ($row) {
                            echo '<tr>';
                            
                            echo '<td>' . $row['Name'] . '</td>';
                            echo '<td>' . $row['Address'] . '</td>';                    
                            echo '<td>' . $row['ManagerFName'] . '</td>';
                            
                            echo '<td>' . $row['ManagerEmail'] . '</td>';
                            echo '<td>' . $row['ManagerNumber'] . '</td>';
                            echo '<td>' . $row['MaxCapacity'] . '</td>';
                           
                            echo '</tr>';  

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                        ?>
                    </tbody>
                </table>
                
            </div>
        </div>
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
