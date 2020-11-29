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
$sql = "SELECT jobid, designation, avg_salary FROM jobs";
echo "<table> ";
$result = $mysqli->query($sql);
echo"<h2>JOBS TABLE</h2>";
echo " <tr> ";

        echo"<th> JOBID </th>";
        echo"<th> DESIGNATION </th>";
        echo"<th> AVERAGE SALARY </th>";
    // end foreach
    echo " </tr>";

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " <tr> ";

        echo"<td>  $row[jobid] </td>";
        echo"<td>  $row[designation] </td>";
        echo"<td>  $row[avg_salary] </td>";
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