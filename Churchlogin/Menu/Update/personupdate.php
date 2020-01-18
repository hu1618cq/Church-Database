<?php
    include_once'process.php';
    $PersonID= mysqli_real_escape_string($conn,$_POST['PersonID']); 
    $first= mysqli_real_escape_string($conn,$_POST['First']);
    $last = mysqli_real_escape_string($conn,$_POST['Last']);
    $Address = mysqli_real_escape_string($conn,$_POST['Address']);
    $Zip = mysqli_real_escape_string($conn,$_POST['Zip']);
    $Phone = mysqli_real_escape_string($conn,$_POST['Phone']);
    $Email = mysqli_real_escape_string($conn,$_POST['Email']);
    $Type = mysqli_real_escape_string($conn,$_POST['Type']);
    $Date = mysqli_real_escape_string($conn,$_POST['Date']);
  
    //declare varible for radio button for member, employee
    //$Member = mysqli_real_escape_string($conn,$_POST['Member']);
    //$Employee = mysqli_real_escape_string($conn,$_POST['Employee']);
  $sql = "SELECT P* FROM Person  WHERE PersonID='$PersonID';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
    if ($resultCheck > 0) {
            header("Location: ../Update/updatePerson..html?error");
            exit();
    } else {
        // Update the MemberID into the database
     
          $sql = "UPDATE Person
            SET PersonID= '$PersonID',
                FirstName= '$first',
                LastName='$last',
                Address= '$Address',
                Zip= '$Zip' 
                , Phone= '$Phone' 
                , Email= '$Email' 
                , Personnel_Type= '$Type' 
                , DateModified = '$Date' 
            WHERE PersonID = '$PersonID';"; 

    mysqli_query($conn, $sql); 
    

    header("location: ../Update/priorAddressupdate.php?Update Person add =success");
}
    
