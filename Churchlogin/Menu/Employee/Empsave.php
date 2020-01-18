<?php

//directory for connect to database
    include_once'process.php';
    //assign the input name to a new variable
    $PersonID= mysqli_real_escape_string($conn,$_POST['PersonID']); 
    $DateHired= mysqli_real_escape_string($conn,$_POST['DateHired']);
    $Title = mysqli_real_escape_string($conn,$_POST['Title']);
    $Resume = mysqli_real_escape_string($conn,$_POST['Resume']);
    

    $sql = "SELECT * FROM Employee WHERE PersonID='$PersonID'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
     if ($resultCheck > 0) {
            header("Location: ../Employee/NewEmployee.php?empty");
            exit();
    } else {
             // Insert the MemberID into the database
        $sql = "INSERT INTO Employee (PersonID,DateHired, Title , Resume) VALUES 
    ('$PersonID','$DateHired','$Title','$Resume');"; 
               
            //create a sql to connect to database table
             mysqli_query($conn, $sql);
             
      //create a sql to connect to database table
    header("location: ../Employee/Assignment.php?Employee add =success");
                        exit();
    }

?>  