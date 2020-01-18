<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>Sort Employee ID</title>
     <link href="style.css" rel="stylesheet" type="text/css"/>

<body>
    <h2>Sort by Employee ID</h2>
<?php 
    
   $sql = "SELECT E.*, P.* FROM Employee E, Person P  WHERE P.PersonID = E.PersonID ORDER BY E.EmployeeID;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Employee ID:".$row['EmployeeID'] 
                . "&nbsp"."<br>". "Last Name:".$row['LastName'
                ]."&nbsp"."<br>"."First Name:".$row['FirstName'
                ]."&nbsp". "<br>"."Title:".$row['Title'] 
                . "&nbsp"."<br>"."Date Hired:".$row['DateHired'] 
                . "&nbsp". "<br>". "<br>";
            }
    }
?>
</body>
</html>