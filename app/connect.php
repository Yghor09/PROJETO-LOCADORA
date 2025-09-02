<?php
$servername = "localhost";
$database = "locadora";
$username = "user_locadora";
$password = "user%locadora#";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);    
} catch (PDOException $pe) {
    die("Não foi possível se conectar ao banco de dados $database :" . $pe->getMessage());
}

