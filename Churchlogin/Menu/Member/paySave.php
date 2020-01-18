<?php
    include_once'process.php';

    $PaymentID = mysqli_real_escape_string($conn,$_POST['PaymentID']);
    $ID = mysqli_real_escape_string($conn,$_POST['ID']);
    $AccountnumID = mysqli_real_escape_string($conn,$_POST['AccountnumID']);
    $Pay = mysqli_real_escape_string($conn,$_POST['Pay']);
    $Amount = mysqli_real_escape_string($conn,$_POST['amount']);


    $sql = "SELECT * FROM Payment WHERE PaymentID='$PaymentID' OR AccountNumberID ='$AccountnumID';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
     if ($resultCheck > 0) {
            header("Location: ../Member/Payment.php? PaymentID=taken or AccountNumberID not exist");
            exit();
    } else {
             // Insert the MemberID into the database

        $sql = "INSERT INTO Payment (PaymentID, MemberID , AccountNumberID , Pay ,
        Amount ) VALUES ('$PaymentID','$ID','$AccountnumID','$Pay','$Amount');";  
           
             mysqli_query($conn, $sql);
            header("location: ../Menu.html? Payment =success");
                        exit();
    }

