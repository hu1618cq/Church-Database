<?php
    include_once'process.php';
?>

<html>
<head>
    <title> Payment </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <h2> Member Payment</h2>
    <form action="paySave.php" method="POST">

        Payment Id:<input type="text" placeholder="Payment ID" name="PaymentID" >
        Account Number ID:<input type="text" placeholder="Account Number ID" name="AccountnumID">
        Amount:<input type="text" placeholder="$0.00" name="amount">
        Payment Type:
        <br>
        <br>
        Cash<input type="radio" value="3" name="ID"> 
        Check<input type="radio" value="0" name="ID">
        Credit Card<input type="radio" value="4" name="ID">
        <br>
        <br>
        Payment For:
        <br>
        <input type="radio" value="Bible Class" name="Pay"> Bible Class
        <input type="radio" value="Child Care" name="Pay">Child Care
        <input type="radio" value="Member Fee" name="Pay">Member Fee
        <br>

        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>
