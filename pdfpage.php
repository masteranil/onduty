<?php
require_once 'utils/functions.php';
require_once 'classes/User.php';
require_once 'classes/onduty.php';
require_once 'classes/ondutytablegateway.php';
require_once 'classes/Connection.php';



$connection = Connection::getInstance();
$gateway = new ondutytablegateway($connection);

$statement = $gateway->getonduty();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>onduty students</title>
        <?php require 'utils/styles.php'; ?>
        <?php require 'utils/scripts.php'; ?>
       
       
       
      
    </head>
       <?php require_once 'pdfheader.php'; 
       
        ?>
    <body>       
                      
                         
        <div class = "content">
            <div class = "container">
                <?php
                $query = "SELECT * FROM `onduty`;";
  
                // FETCHING DATA FROM DATABASE
                $result = $conn->query($query);
                
                
                  if ($result->num_rows > 0) 
                  {
                      // OUTPUT DATA OF EACH ROW
                      
                ?>
                <h2>student List</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID </th>
                            <th>student name</th>
                            <th>register no</th>
                            <th>Event Name</th>
                            <th>Department</th>
                            <th>Event  Date</th>
                            <th>Time</th>
                            <th>venue</th>
                            
                                            </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = $result->fetch_assoc())
                         {
                            echo '<tr>';
                            echo '<td>' . $row['ID'] . '</td>';
                            echo '<td>' . $row['studentname'] . '</td>';
                            echo '<td>' . $row['regno'] . '</td>';
                            echo '<td>' . $row['eventname'] . '</td>';
                            echo '<td>' . $row['Department'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['Time'] . '</td>';
                            echo '<td>' . $row['venue'] . '</td>';
                           
                            echo '</tr>';

                            $row = $statement->fetch(PDO::FETCH_ASSOC);
                        }
                    }
                    
                    else 
                                                                  echo "no students applied for onduty"
                        ?>
                    </tbody>
                </table>

               <button onclick = "window.print();"class="btn btn-success hidden-print" id = "print-btn"> print</button>
              
            </div>
        </div>

        
    </body> 
        
</html>

<?php