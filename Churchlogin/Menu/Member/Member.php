<?php
    include_once'process.php';
?>

<html>
<head>
    <title>New Member </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2> New Member</h2>
    <form action="signup.inc.php" method="POST">
         Member ID:<input type="text" placeholder="MemberID" name="MemberID" > 
        <br>
        Renewal Date:<input type="text" placeholder="YYYY-MM-DD" name=" Renewal" > 
        <br>
        Payment Type :<input type="text" placeholder="Credit Card/Check/cash" name="Payment"> 
        <br>
         Family Count:<input type="text" placeholder="Number of Family" name="FamilyCount"> 
        <br>
         Date Join:<input type="text" placeholder="YYYY-MM-DD" name="DateJoin"> 
        <br>
        Applcation:<input type="text" placeholder="Yes or No" name="Application"> 
        <br>
        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>
