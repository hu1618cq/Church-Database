<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Hourly Pay </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
	<h2>Hourly Pay</h2>
    <form action="hesave.php" method="POST">
      
       Hourly ID:<input type="text" placeholder="HE ID" name="HE"> 
        <br>
        Hourly Pay:<input type="text" placeholder="00.00" name="Hourly_Pay">
        <br>
        <button type="submit" name="submit">Add</button>
</form>
 
</body>
</html>