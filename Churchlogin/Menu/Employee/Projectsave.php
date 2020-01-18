<?php

//directory for connect to database
    include_once'process.php';
    //assign the input name to a new variable
    $ProjectID = mysqli_real_escape_string($conn,$_POST['ProjectID']);
    $AssignmentID= mysqli_real_escape_string($conn,$_POST['AssignmentID']);
    $ProjectName= mysqli_real_escape_string($conn,$_POST['ProjectName']);
    $StartDate= mysqli_real_escape_string($conn,$_POST['StartDate']);
    $EndDate = mysqli_real_escape_string($conn,$_POST['EndDate']);
      

         //create a sql to connect to database table
    $sql = "SELECT * FROM Project WHERE ProjectID='$ProjectID'";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
       
       /*Create an if-else statement to check if the project id
         match the database project ID */           
     if ($resultCheck > 0) {
            header("Location: ../Employee/Project.php?error");
            exit();
    } else {
             // Insert the MemberID into the database
        $sql = "INSERT INTO Project (ProjectID, AssignmentID, ProjectName, StartDate,
     EndDate) VALUES ('$ProjectID','$AssignmentID','$ProjectName','$StartDate','$EndDate');";  
           
             mysqli_query($conn, $sql);
     //once excute it will direct to Salary Hourly page
        header("location: ../Employee/Salary.php?Project=success");
                        exit();
                        
    } 
