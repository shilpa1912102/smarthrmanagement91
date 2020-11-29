<?php
include "connection.php";
$in_deptid = $_GET["deptid"];
$in_deptname = $_GET["dept_name"];
$in_empn = $_GET["No_of_employee"];
$in_deptname = addslashes($in_deptname);
echo "<h2>Add a new department $in_deptid -$in_deptname-$in_empn </h2>";
$sql = "INSERT INTO department values ($in_deptid,'$in_deptname', $in_empn)";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
include "search_all.php";
?>
