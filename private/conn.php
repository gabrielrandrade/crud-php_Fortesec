<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "crud_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>