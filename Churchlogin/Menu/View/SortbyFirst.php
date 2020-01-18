<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>Sort First Name</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2>Sort by First Name</h2>
<?php 
    $sql = "SELECT * FROM Person  WHERE PersonID = PersonID ORDER BY FirstName ASC;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo"First Name:".$row['FirstName'] 
                . "&nbsp"."<br>". "Last Name:".$row['LastName'
                ]."&nbsp". "<br>"."Address:".$row['Address'] 
                . "&nbsp"."Zip:".$row['Zip'] 
                . "&nbsp". "<br>"."Phone:".$row['Phone'] 
                . "&nbsp"."Email:".$row['Email'] 
                . "&nbsp". "<br>"."Type:".$row['Personnel_Type'] 
                ."&nbsp"."Date Modified:".$row['DateModified'] 
                . "&nbsp"."&nbsp". "<br>". "<br>";
            }
    }
?>
</body>
</html>