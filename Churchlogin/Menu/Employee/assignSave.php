<?php
//directory for connect to database
    include_once'process.php';

    //assign the input name to a new variable
    $EmployeeID= mysqli_real_escape_string($conn,$_POST['EmployeeID']); 
    $AssignmentName= mysqli_real_escape_string($conn,$_POST['AssignmentName']);
    $AssignmentDate = mysqli_real_escape_string($conn,$_POST['AssignmentDate']);
   
        //create a sql to connect to database table
    $sql = "INSERT INTO Assignment (EmployeeID,AssignmentName, AssignmentDate) VALUES
    		('$EmployeeID','$AssignmentName','$AssignmentDate');"; 
    //excute the query and save the insert value
    mysqli_query($conn, $sql); 
    //once excute it will direct to Project page
    header("location: ../Employee/Project.php?Assignment add =success");
    
?>  