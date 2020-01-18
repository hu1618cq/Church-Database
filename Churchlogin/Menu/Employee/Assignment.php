<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Employee Assignment </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>


</head>
<body>
    <h2> Employee Assignment</h2>
    <form action="assignSave.php" method="POST">
        Employee ID:
        <br><input type="text" placeholder="Employee ID" name="EmployeeID" >
        Assignment Name:<input type="text" placeholder="Assignment Name" name="AssignmentName" >  
        <br>
        Assignment Date:<input type="text" placeholder="YYYY-MM-DD" name="AssignmentDate"> 
        <br>
        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>
