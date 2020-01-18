<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Recurring Charge </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2> Recurring Charge</h2>
    <form action="RC.php" method="POST">

        Account ID:<input type="text" placeholder="Account Number ID" name="AccountID" >
        <br>
        Card Number:<input type="text" placeholder="XXXX-XXXX-XXXX-XXXX" name=" Card_Num" >
        <br>
        Expire Year:<input type="text" placeholder="YYYY" name="Exp_Year">
        <br>
        Expire Month:<input type="text" placeholder=" MM" name="Exp_Mon">
        <br>
        Bank Account:<input type="text" placeholder="XXXXXXXXX" name="BankAcc">
        <br>
        Routing Number:<input type="text" placeholder="XXXXXXXXXXXX" name="RouteNum">
        <br>
        Modified Date:<input type="text" placeholder="Modified Date: YYYY-MM_DD" name="ModifiedDate">
        <br>
        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>
