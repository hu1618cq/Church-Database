 <?php
    include_once'process.php';

    $PA = mysqli_real_escape_string($conn,$_POST['PA']);
    $oldA = mysqli_real_escape_string($conn,$_POST['oldA']);
    $oldp = mysqli_real_escape_string($conn,$_POST['oldp']);
    $olde = mysqli_real_escape_string($conn,$_POST['olde']);
    $P_Date = mysqli_real_escape_string($conn,$_POST['P_Date']);
    //declare varible for radio button for member, employee
    //$Member = mysqli_real_escape_string($conn,$_POST['Member']);
    //$Employee = mysqli_real_escape_string($conn,$_POST['Employee']);
  $sql = "SELECT * FROM PriorAddress  WHERE PA_ID='$PA';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
                    
    if ($resultCheck > 0) {
            header("Location: ../Update/updatepriorAddress.php?error");
            exit();
    } else {
 			$sql = "INSERT INTO PriorAddress (PA_ID , Address_Old , Phone_Old, 
                Email_Old , Date) VALUES ('$PA','$oldA','$oldp','$olde','$P_Date');";
 	
 	mysqli_query($conn, $sql); 

    header("location: ../Menu.html?Update Person add =success");
}