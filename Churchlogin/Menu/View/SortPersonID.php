<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>SortPerson ID</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <h2>Sort by Person ID</h2>
<?php 
    
   $sql = "SELECT * FROM  Person WHERE PersonID = PersonID ORDER BY PersonID;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Person ID:".$row['PersonID']
                ."&nbsp" ."<br>"."First Name:".$row['FirstName']
                ."&nbsp"."<br>" . "Last Name:".$row['LastName']
                ."&nbsp"."&nbsp"."&nbsp"."<br>"."New Address:"
                .$row['Address']."&nbsp"."<br>"."New Phone:".$row['Phone']
                ."&nbsp"."<br>"."New Email:".$row['Email']
                ."&nbsp". "<br>". "<br>";
    }
}
?>
</body>
</html>