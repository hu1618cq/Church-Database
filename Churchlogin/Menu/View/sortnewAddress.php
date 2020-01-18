<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>New Address sort</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <h2>Sort by New Address</h2>
<?php 

    $sql = "SELECT P.*, PA.* FROM Person P, PriorAddress PA 
    WHERE P.PersonID = PA.PersonID ORDER BY P.Address;";

    $result = mysqli_query($conn,$sql);

    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "First Name:".$row['FirstName']
                ."&nbsp". "<br>" . "Last Name:".$row['LastName']
                ."&nbsp"."&nbsp"."&nbsp"."<br>"."New Address:"
                .$row['Address']."&nbsp". "<br>"."New Phone:".$row['Phone']
                ."&nbsp". "<br>"."New Email:".$row['Email']."&nbsp". "<br>"
                ."Old Address".$row['Address_Old']."&nbsp". "<br>"."Old Phone:"
                .$row['Phone_Old']."&nbsp". "<br>"."Old Email:".$row['Email_Old']
                . "<br>". "<br>";
            }
    }
?>
</body>
</html>