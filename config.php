<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Accounts";

// Creare la connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllare la connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}
?>
