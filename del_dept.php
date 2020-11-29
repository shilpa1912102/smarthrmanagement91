<?php
include "connection.php";
   
   if(! $mysqli ) {
      die('Could not connect: ' . mysql_error());
   }
   $del_dept = $_GET["deptid"];
   $sql = "DELETE FROM department WHERE deptid= $del_dept";

   $retval = $mysqli->query($sql);

   if(! $retval ) {
      die('Could not delete data: ' . mysql_error());
   }
   echo "Deleted data successfully\n";
   include "search_all.php";
?>