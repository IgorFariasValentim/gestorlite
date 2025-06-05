<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: index.php");
    exit;
}
include "conexao.php";
$result = mysqli_query($conn, "SELECT * FROM funcionarios ORDER BY nome ASC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - GestorLite</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>Funcionários</h2>
    <a href="cadastrar.php" class="btn">+ Adicionar</a>
    <a href="logout.php" class="btn sair">Sair</a>
    <table>
        <tr><th>Nome</th><th>Cargo</th><th>Ações</th></tr>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['cargo'] ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a> | 
                <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir?')">Excluir</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>