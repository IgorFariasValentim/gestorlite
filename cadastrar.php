<?php
include "conexao.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    mysqli_query($conn, "INSERT INTO funcionarios (nome, cargo) VALUES ('$nome', '$cargo')");
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar - GestorLite</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>Adicionar Funcionário</h2>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome completo" required>
        <input type="text" name="cargo" placeholder="Cargo" required>
        <button type="submit">Salvar</button>
        <a href="dashboard.php" class="btn voltar">Voltar</a>
    </form>
</div>
</body>
</html>