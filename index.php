<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php

include "connection.php";

?>

<form class="form-horizontal" action="search_deptid.php">
<fieldset>

<!-- Form Name -->
<legend>Search for department</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deptid">Department ID</label>
  <div class="col-md-5">
    <input id="deptid" name="deptid" type="search" placeholder="e.g. 1001" class="form-control input-md" required="">
    <p class="help-block">Enter department id to search for department</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">search</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal" action="search_all.php">
<fieldset>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">To get complete table:</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">click</button>
  </div>
</div>

</fieldset>
</form>

<hr>

<form class="form-horizontal" action="add_department.php">
<fieldset>

<!-- Form Name -->
<legend>ADD DEPARTMENT</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deptid">Department ID</label>  
  <div class="col-md-5">
  <input id="deptid" name="deptid" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dept_name">Department Name</label>  
  <div class="col-md-6">
  <input id="dept_name" name="dept_name" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="No_of_employee">Number of employees</label>  
  <div class="col-md-5">
  <input id="No_of_employee" name="No_of_employee" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Add</button>
  </div>
</div>

</fieldset>
</form>


<form class="form-horizontal" action = "search_jobid.php">
<fieldset>

<!-- Form Name -->
<legend>Search for jobs</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jobid">JOB ID</label>
  <div class="col-md-4">
    <input id="jobid" name="jobid" type="search" placeholder="e.g.J01" class="form-control input-md" required="">
    <p class="help-block">Enter job id to search for jobs</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">search</button>
  </div>
</div>

</fieldset>
</form>


<form class="form-horizontal" action="search_jobs.php">
<fieldset>
<legend>JOB TABLE</legend>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">To get the jobs table</label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">click here</button>
  </div>
</div>

</fieldset>
</form>

<form class="form-horizontal" action="del_dept.php">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="">Department ID</label>  
  <div class="col-md-4">
  <input id="deptid" name="deptid" type="text" placeholder="e.g.1001" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">delete</button>
  </div>
</div>

</fieldset>
</form>



<?php

//include "search_deptid.php";
$mysqli->close();
?>
</body>
</html>