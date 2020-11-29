<?php
include "connection.php";
$in_jobid = $_GET["jobid"];
$in_designation = $_GET["designation"];
$in_avgs = $_GET["avg_salary"];
$in_designation = addslashes($in_designation);
echo "<h2>Add a new Job $in_jobid -$in_designation-$in_avgs </h2>";
$sql = "INSERT INTO jobs values ($in_jobid,'$in_designation', $in_avgs)";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));
include "searchjobs.php";
?>
