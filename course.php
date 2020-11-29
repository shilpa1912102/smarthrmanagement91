<?php
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $dept_id = $_POST['dept_id'];
    
    

    $conn = new mysqli('localhost','root','','course');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into courses(course_id,course_name,dept_id)
        values(?,?,?)");
        $stmt->bind_param("sss",$course_id,$course_name,$dept_id);
        $stmt->execute();
        echo "registration successful...";
        $stmt->close();
        $conn->close();

    }
?>
