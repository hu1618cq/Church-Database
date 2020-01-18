<?php

//directory for connect to database
    include_once'process.php';
    //assign the input name to a new variable

    $HE = mysqli_real_escape_string($conn,$_POST['HE']);
    $Hourly_Pay = mysqli_real_escape_string($conn,$_POST['Hourly_Pay']);
   
    
  $sql = "SELECT * FROM HourlyEmployee WHERE HE_ID='$HE'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
     if ($resultCheck > 0) {
            header("Location: ../Employee/Hourly.php?empty");
            exit();
    } else {
           
    //create a sql to connect to database table
    $sql2 = "INSERT INTO HourlyEmployee (HE_ID,Hourly_Pay) VALUES ('$HE','$Hourly_Pay');";
               
          
    //excute the query and save the insert value
    mysqli_query($conn, $sql2); 
    //once excute it will direct to Menu page
    header("location: ../Menu.html?Hourly_Pay =success");
    }

?>  