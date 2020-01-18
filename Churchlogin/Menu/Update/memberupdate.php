<?php
    include_once'process.php';

    $RenewalDate = mysqli_real_escape_string($conn,$_POST['Renewal']);
    $Payment_Type = mysqli_real_escape_string($conn,$_POST['Payment']);
    $FamilyCount = mysqli_real_escape_string($conn,$_POST['FamilyCount']);
    $DateJoin = mysqli_real_escape_string($conn,$_POST['DateJoin']);
    $Application = mysqli_real_escape_string($conn,$_POST['Application']);
    $MemberID = mysqli_real_escape_string($conn,$_POST['MemberID']);

    $sql = "UPDATE Member 
            SET RenewalDate= '$RenewalDate',
                Payment_Type= '$Payment_Type',
                FamilyCount='$FamilyCount',
                DateJoin= '$DateJoin',
                Application= '$Application' 
            WHERE MemberID = '$MemberID';"; 

    mysqli_query($conn, $sql); 

    header("location: ../Menu.html?Member add =success");
    
?>  