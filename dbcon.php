<?php
//forbindelse til databasen, både online og offline

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'GoMove';

/*
$server = 'lykkeeilert.dk.mysql';
$username = 'lykkeeilert_dk';
$password = 'Q2KcraNm';
$database = 'lykkeeilert_dk';
*/

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e) {
    die( "connection failed:" . $e->getMessage());
}



/*
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
*/
?>



