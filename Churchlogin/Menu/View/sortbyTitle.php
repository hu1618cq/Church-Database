<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>Sort Employee Title</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2>Sort by Employee Title</h2>
<?php 
    
   $sql = "SELECT E.*, P.* FROM Employee E, Person P  WHERE P.PersonID = E.PersonID ORDER BY E.Title ASC;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Title:".$row['Title'] 
                . "&nbsp"."Employee ID:".$row['EmployeeID'] 
                . "&nbsp"."<br>". "Last Name:".$row['LastName'
                ]."&nbsp"."First Name:".$row['FirstName'
                ]."&nbsp". "<br>"."Date Hired:".$row['DateHired'] 
                . "&nbsp". "<br>". "<br>";
            }
    }
?>
</body>
</html>