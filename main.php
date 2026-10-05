<?php
session_start();
$servername = "127.0.0.1";  
$port = 3307;
$username = "root";
$password = "user";
$dbname = "tienda";

$conn = new mysqli($servername, $username, $password, $dbname, $port);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>