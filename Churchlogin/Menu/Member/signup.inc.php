<?php
    include_once'process.php';
    $MemberID = mysqli_real_escape_string($conn,$_POST['MemberID']);
    $RenewalDate = mysqli_real_escape_string($conn,$_POST['Renewal']);
    $Payment_Type = mysqli_real_escape_string($conn,$_POST['Payment']);
    $FamilyCount = mysqli_real_escape_string($conn,$_POST['FamilyCount']);
    $DateJoin = mysqli_real_escape_string($conn,$_POST['DateJoin']);
    $Application = mysqli_real_escape_string($conn,$_POST['Application']);


    $sql = "SELECT * FROM Member WHERE MemberID='$MemberID'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
     if ($resultCheck > 0) {
            header("Location: ../Member/Member.php?empty");
            exit();
    } else {
             // Insert the MemberID into the database
        $sql = "INSERT INTO Member ( MemberID,RenewalDate, Payment_Type,
             FamilyCount, DateJoin, Application) VALUES 
        ('$MemberID','$RenewalDate','$Payment_Type', '$FamilyCount'
                , '$DateJoin', '$Application');"; 
            
             mysqli_query($conn, $sql);
            header("location: ../Member/RecurringCharge.php?Member add =success");
                        exit();
    }

