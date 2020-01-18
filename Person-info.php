<?php

//set user, password, and database which is db from mysql to php
$user = 'root';
$pass = '';
$db = 'ChurchDatabase';

$db = new mysqli('localhost', $user, $pass, $db);

//if/else statement to determine if it connect successful
if (!$db){
    die("Unable to Connect");
}else{
    echo 'Connect successful';}

$db_selected = mysqli_select_db(DB_NAME, $db);
if(!$db_selected){
    die('Can\'t use ' .DB_NAME . ':' .mysqli_error);
}
$value = $_POST['FirstName'];
$sql = "INSERT INTO Person (FirstName) VALUES ('$value')";

if(!mysqli_query($sql)){
    die('Error: ' .mysqli_error);
    
}

mysqli_close();
?>