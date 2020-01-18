<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Update Person </title>
     <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
        <h2>Update Person</h2>

    <form action="personupdate.php" method="POST">
       Person ID: <input type="text" placeholder="Person ID" name="PersonID" >
        <br>
       First Name: <input type="text" placeholder="First Name" name="First" >
        <br>
        Last Name:<input type="text" placeholder="Last Name" name="Last" >
        <br>
        Address:<input type="text" placeholder="Street, City, State" name="Address">
        <br>
        Zip Code:<input type="text" placeholder="Zip" name="Zip">
        <br>
        Phone:<input type="text" placeholder="XXX-XXX-XXX" name="Phone">
        <br>
        E-mail:<input type="text" placeholder="E-mail" name="Email">
        <br>
        Type:
        <br>
        <br>
        Member:<input type="radio" value="Member" name="Type"> 
        Employee:<input type="radio" value="Employee" name="Type">
        <br>
        <input type="text" placeholder="YYYY-MM-DD" name="Date">
        <br>
       
        <button type="submit" name="submit">Add</button>
</form>

</body>
</html>
