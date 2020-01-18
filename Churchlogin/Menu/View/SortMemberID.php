<?php
    include_once 'process.php';
?>
<html>
<head>
    <title>Sort Member ID</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <h2>Sort by Member ID</h2>
<?php 
    
   $sql = "SELECT M.*,P.* FROM  Member M, Person P WHERE M.PersonID = P.PersonID ORDER BY M.MemberID;";
    $result = mysqli_query($conn,$sql);
    $resultCheck = mysqli_num_rows($result);
    
    if($resultCheck >0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "Member ID:".$row['MemberID']
                ."&nbsp"."<br>" ."First Name:".$row['FirstName']
                ."&nbsp"."<br>" . "Last Name:".$row['LastName']
                ."&nbsp"."<br>"."Renewal Date:"
                .$row['RenewalDate']."&nbsp"."<br>"."Payment Type:".$row['Payment_Type']
                ."&nbsp"."<br>"."Family Count:".$row['FamilyCount']
                ."&nbsp"."<br>". "Date Join:".$row['DateJoin']
                ."&nbsp". "<br>". "<br>";
    }
}
?>
</body>
</html>