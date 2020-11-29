<html>
<head>
<style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
</head>
<body>
<?php
include "connection.php";
$jobid_form = $_GET["jobid"];
echo "<h2>search for Jobs table</h2>";
$sql = "SELECT jobid, designation, avg_salary FROM jobs where jobid = $jobid_form";
echo "<table> ";
$result = $mysqli->query($sql);
echo " <tr> ";

        echo"<th>JOBID </th>";
        echo"<th> DESIGNATION</th>";
        echo"<th> AVG_SALARY </th>";
    // end foreach
    echo " </tr>";
 if($result){   
if ($result -> num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr> ";
        echo"<td>  $row[jobid]</td>";
        echo"<td>  $row[designation]</td>";
        echo"<td>  $row[avg_salary]</td>";
    // end foreach
    echo " </tr> ";
    }
  } else {
    echo "0 results";
  }
}
?>
</body>
</html>