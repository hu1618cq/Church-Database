<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Update Employee </title>
         <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <h2>Update Employee</h2>
    <form action="employeeupdate.php" method="POST">
         Person ID:<input type="text" placeholder="Person ID" name="PersonID" > 
        <br>
         Date Hired:<input type="text" placeholder="YYYY-MM-DD" name="DateHired" > 
        <br>
        Title:<input type="text" placeholder="Title" name="Title"  >
        <br>
        Resume:<input type="text" placeholder="Yes or No" name="Resume"> 
        <br>
        
        <button type="submit" name="submit">Update</button>
</form>
 
</body>
</html>
