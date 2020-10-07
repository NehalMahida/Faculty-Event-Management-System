<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sem7_sgp");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM sheet3 ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0)
    {
        echo "<table>";
            echo "<tr>";
                echo "<th>DeptID_H</th>";
                echo "<th>EmpID_H</th>";
                echo "<th>Employee Name</th>";
                echo "<th>Employee Current Status</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['DeptID_H'] . "</td>";
                echo "<td>" . $row['EmpID_H'] . "</td>";
                echo "<td>" . $row['Employee Name'] . "</td>";
                echo "<td>" . $row['Employee Current Status'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>