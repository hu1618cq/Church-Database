<?php
    include_once'process.php';
?>

<html>
<head>
    <title>Employee Project </title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <h2>Employee Project</h2>
    <form action="Projectsave.php" method="POST">
       Project Id: <input type="text" placeholder="Project ID" name="ProjectID" > 
        <br>
        Project Name:<input type="text" placeholder="Project Name" name="ProjectName"> 
        <br>
        Start Date:<input type="text" placeholder="Start:YYYY-MM-DD" name="StartDate"> 
        <br>
        End Date:<input type="text" placeholder="End:YYYY-MM-DD" name="EndDate">
        <br>
        <form>
        Appointment with Church Member <input type="radio" value="31" name="Appointment"> 
        Check employee Record 
        <input type="radio" value="27" name="Check Emp Record"> 
        Check financial  
        <input type="radio" value="38" name="Check financial"> 
        Check Virus
        <input type="radio" value="37" name="Check Virus">  
        Clean Tech 
        <input type="radio" value="26" name="Clean Tech"> 
        Mentor/Trainning Volutneer 
        <input type="radio" value="29" name="Mentor/Trainning"> 
        Clean Bathroom 
        <input type="radio" value="33" name="Clean Bath"> 
        Deliver New Laptop 
        <input type="radio" value="35" name="Deliver">
        Spiritual Development For Church Employee 
        <input type="radio" value="36" name="Spiritual Development">

        <button type="submit" name="submit">Add</button>
        </form>
</form>
 
</body>
</html>
