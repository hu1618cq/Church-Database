<?php
    include_once'process.php';

    $PersonID = mysqli_real_escape_string($conn,$_POST['PersonID']);
    $DateHired = mysqli_real_escape_string($conn,$_POST['DateHired']);
    $Title = mysqli_real_escape_string($conn,$_POST['Title']);
    $Resume = mysqli_real_escape_string($conn,$_POST['Resume']);
   
    $sql = "UPDATE Employee 
            SET PersonID= '$PersonID',
                DateHired= '$DateHired',
                Title='$Title',
                Resume= '$Resume'
            WHERE PersonID = '$PersonID';"; 

    mysqli_query($conn, $sql); 

    header("location: ../Menu.html?Update Employee =success");
    
?>  
