
<?php

include('conn.php');

// Connect to the database
$dbLink = new mysqli('localhost', 'root', 'root', 'workshop');
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$sql = "SELECT * FROM members";

$result2 = $dbLink->query($sql);
    
// Check if it was successfull
if($result2) {
    // Make sure there are some files in there
    if($result2->num_rows == 0) {
        echo '<p>No Data Found</p>';
    }
    else {
        // Print the top of a table
        echo '
             <
                <div style="postion:absolute;margin-top:150px;margin-left:400px">
                
                    <table width="60%" border="1">
                    <tr>
                    <th><b>First Name</b></th>
                    <th><b>Last Name</b></th>
                    <th><b>EmailId</b></th>
                    <th><b>Mobile No</b></th>
                    
                     
                </tr>';

        // Print each file
        while($row = $result2->fetch_assoc()) {
            echo "
                <tr>
                    <td>{$row['fname']}</td>
                    <td>{$row['lname']}</td>
                    <td>{$row['emailid']}</td>
                    <td>{$row['mob_no']}</td>
                   
                </tr>";
        }

        // Close table
        echo '</table>
        </div>';
    }

    // Free the result
    $result2->free();
}
else
{
    echo 'Error! SQL query failed:';
    echo '<pre>{$dbLink->error}</pre>';
}
   echo  '</p><br>
    
    
</body>';

?>