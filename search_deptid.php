<html>
<head>
<style type = "text/css">
  table, th, td {border: 1px solid black};
 </style>
</head>
<body>
<?php
include "connection.php";
$deptid_form = $_GET["deptid"];
echo "<h2>search for the department table</h2>";
$sql = "SELECT deptid, dept_name, no_of_employee FROM department where deptid = $deptid_form";
echo "<table> ";
$result = $mysqli->query($sql);
echo " <tr> ";

        echo"<th> DEPTID </th>";
        echo"<th> DEPARTMENT NAME </th>";
        echo"<th> NUMBER OF EMPLOYEES </th>";
    // end foreach
    echo " </tr>";
 if($result){   
if ($result -> num_rows > 0){
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " <tr> ";
        echo"<td>  $row[deptid] </td>";
        echo"<td>  $row[dept_name] </td>";
        echo"<td>  $row[no_of_employee] </td>";
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