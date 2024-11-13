<?php
    include 'conn.php';

    $sql = "SELECT id,nome,email,dt_nascimento FROM crud_tb";

    $exc = $conn->query($sql);


    if($exc->num_rows > 0){
        echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Email</th><th>Data</th><th>Ações</th></tr>";
        while($row = $exc->fetch_assoc()){
            echo"<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["email"]. "</td>
                    <td>" . $row["dt_nascimento"]. "</td>
                    <td><a href='index.php?id=" . $row["id"] . "'>Criar</a> | <a href='update.php?id=" . $row["id"] . "'>Editar</a> | <a href='delete.php?id=" . $row["id"] . "'>Deletar</a></td>
                </tr>";
        }
        echo "</table>";
    }else{
        echo "Usuario não encontrado";
    }

    $conn->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    
</body>
</html>