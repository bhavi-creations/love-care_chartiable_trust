<?php
$host = 'localhost';
// Determine if the server is localhost
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $user = "root";
    $pass = "";
    $db = "charitable_trust";
} else {
    $user = "loveandcaretrust";
    $pass = "9cePPd3BiojDl4d";
    $db = "loveandcaretrust";
}


 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $db :" . $e->getMessage());
}
?>


