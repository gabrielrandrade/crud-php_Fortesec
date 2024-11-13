<?php

include 'conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM crud_tb WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: read.php");
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>
