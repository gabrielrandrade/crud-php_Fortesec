<?php
    include 'conn.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

    $sql = "SELECT * FROM crud_tb WHERE id = $id";
    $exc = $conn->query($sql);

    if ($exc->num_rows > 0) {
        $user = $exc->fetch_assoc();
    } else {
        echo "Usuário não encontrado!";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $dataN = $_POST['dt_nascimento'];

        $sql = "UPDATE crud_tb SET nome = '$nome', email = '$email', dt_nascimento = '$dataN' WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            header("Location: read.php");
        } else {
            echo "Erro: " . $conn->error;
        }
    }
    } else {
    echo "ID não especificado!";
    exit;
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="update.php?id=<?php echo $user['id']; ?>">
        <label>Nome: </label><br>
        <input type="text" name="nome" value="<?php echo $user['nome']; ?>" required><br>
        <label>Email: </label><br>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required><br>
        <label>Data Nascimento: </label><br>
        <input type="date" name="dt_nascimento" value="<?php echo $user['dt_nascimento']; ?>" required><br>
        <input type="submit" value="Atualizar Usuário">
    </form>
    
</body>
</html>
