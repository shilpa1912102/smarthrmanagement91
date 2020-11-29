<html>
<head>
<style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
</head>
<body>
<?php
include "connection.php";
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";
$sql = "SELECT deptid, dept_name, no_of_employee FROM department";
echo "<table> ";
$result = $mysqli->query($sql);
echo"<h2>DEPARTMENT TABLE</h2>";
echo " <tr> ";

        echo"<th> DEPTID </th>";
        echo"<th> DEPARTMENT NAME </th>";
        echo"<th> NUMBER OF EMPLOYEES </th>";
    // end foreach
    echo " </tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <tr> ";

        echo"<td>  $row[deptid] </td>";
        echo"<td>  $row[dept_name] </td>";
        echo"<td>  $row[no_of_employee] </td>";
    // end foreach
    echo " </tr> ";
  }
} 
else {
  echo "0 results";
}
echo"</table>";
?>
</body>
</html>
<a href="index.php"> Return to main page </a>