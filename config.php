<?php
// connect to the Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toystore";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Print host information
     /* echo "Connect Successfully. Host info: " .
        $pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));  */
} catch (PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}



?>