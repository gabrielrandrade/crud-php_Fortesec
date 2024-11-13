<?php
include 'conn.php';

if($_SERVER['REQUEST_METHOD']==='POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $dataN = $_POST['data'];

    $sql = "INSERT INTO crud_tb (nome,email,dt_nascimento) VALUES ('$nome','$email','$dataN')";

    if($conn->query($sql) === TRUE){
        header("Location: read.php");
    }else{
        echo "ERRO: ". $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD Teste</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label>Nome: </label><br>
        <input type="text" name="nome" id="nome"><br>
        <label>Email: </label><br>
        <input type="email" name="email" id="email"><br>
        <label>Data Nascimento: </label><br>
        <input type="date" name="data" id="data"><br>
        <input type="submit" value="Adicionar Usuário" >
        <a href = "read.php"></a>
    </form>
    
</body>
</html>
