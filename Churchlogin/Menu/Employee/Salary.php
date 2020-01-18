<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Employee Salary Pay </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
	<h2>Salary Pay</h2>
    <form action="SHsave.php" method="POST">
        Salary ID:<input type="text" placeholder="Salary ID" name="SE" >
        <br>
        Salary Pay:<input type="text" placeholder="00.00" name="Salary_Pay" >
        <br>
        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>
