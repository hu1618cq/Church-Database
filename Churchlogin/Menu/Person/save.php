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
  
  

    $sql = "SELECT * FROM Person WHERE PersonID='$PersonID'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
    if ($resultCheck > 0) {
            header("Location: ../Person/addApplication.html?error");
            exit();
    } else {
        // Insert the MemberID into the database
        $sql = "INSERT INTO Person (PersonID,FirstName, LastName , Address ,Zip, Phone 
            , Email , Personnel_Type , DateModified) VALUES ('$PersonID','$first','$last','$Address'
            , '$Zip', '$Phone', '$Email','$Type','$Date');"; 
            
        mysqli_query($conn, $sql);
        //header("Location: ../Menu.html?Person add =success");
    } 
    
    /* if it member is select it will direct to member page, 
        if Employee select it will direct to Employee page */
    if ($_POST["Type"] == "Member") {
        header("Location: ../Member/Member.php?Person add =success");
        exit();                
     } else if ($_POST["Type"] == "Employee") {
        header("Location: ../Employee/NewEmployee.php?Person add =success");
        exit();                
     } else {
        header("Location: ../Person/addApplication.php?error");
        exit();                
     }
     
?>