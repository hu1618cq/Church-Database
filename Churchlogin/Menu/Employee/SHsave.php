<?php

//directory for connect to database
    include_once'process.php';
    //assign the input name to a new variable
    $SE= mysqli_real_escape_string($conn,$_POST['SE']); 
    $Salary_Pay= mysqli_real_escape_string($conn,$_POST['Salary_Pay']);
   
   
    /* compare data with database and then check to see if it has already exist
        if not it will insert data into the database and direct to another page*/
     $sql = "SELECT * FROM SalaryEmployee WHERE HE_ID='$HE'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
     if ($resultCheck > 0) {
            header("Location: ../Employee/Salary.php?empty");
            exit();
    } else {
           
     //create a sql to connect to database table
    $sql = "INSERT INTO SalaryEmployee (SE_ID,Salary_Pay) VALUES ('$SE','$Salary_Pay');"; 
               
       //excute the query and save the insert value
    mysqli_query($conn, $sql); 
    //once excute it will direct to Menu page
    header("location: ../Employee/Hourly.php?Salary.php add =success");
    }
?>  