<?php
//forbindelse til databasen

$server = 'localhost';
$username = 'root';
$password = 'root';
$database = 'GoMove';

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



