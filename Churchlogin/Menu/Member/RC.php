<?php
    include_once'process.php';
   
    //declare varible for radio button for member, employee
    $AccountID= mysqli_real_escape_string($conn,$_POST['AccountID']); 
    $Card_Num= mysqli_real_escape_string($conn,$_POST['Card_Num']);
    $Exp_Year = mysqli_real_escape_string($conn,$_POST['Exp_Year']);
    $BankAcc = mysqli_real_escape_string($conn,$_POST['BankAcc']);
    $RouteNum = mysqli_real_escape_string($conn,$_POST['RouteNum']);
    $ModifiedDate = mysqli_real_escape_string($conn,$_POST['ModifiedDate']);
    $Exp_Mon = mysqli_real_escape_string($conn,$_POST['Exp_Mon']);

    $sql = "SELECT * FROM RecurringCharge WHERE   AccountNumberID  !='$AccountID '";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

                    
     if ($resultCheck < 0) {
            header("Location: ../Member/RecurringCharge.php?Account ID taken");

            exit();
    } else {
             // Insert the MemberID into the database
        $sql = "INSERT INTO RecurringCharge (AccountNumberID, Card_Number , Exp_Year , BankAccount ,
        RouteNum, ModifiedDate , Exp_Month ) VALUES ('$AccountID','$Card_Num','$Exp_Year','$BankAcc','$RouteNum'
                , '$ModifiedDate', '$Exp_Mon');";  
           
             mysqli_query($conn, $sql);
     //once excute it will direct to Salary Hourly page
        header("location: ../Member/Payment.php?RecurringCharge=success");
                        exit();
                        
    } 