<?php
include "conexao.php";
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    mysqli_query($conn, "UPDATE funcionarios SET nome='$nome', cargo='$cargo' WHERE id=$id");
    header("Location: dashboard.php");
    exit;
}
$res = mysqli_query($conn, "SELECT * FROM funcionarios WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Editar - GestorLite</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>Editar Funcionário</h2>
    <form method="POST">
        <input type="text" name="nome" value="<?= $row['nome'] ?>" required>
        <input type="text" name="cargo" value="<?= $row['cargo'] ?>" required>
        <button type="submit">Atualizar</button>
        <a href="dashboard.php" class="btn voltar">Cancelar</a>
    </form>
</div>
</body>
</html>