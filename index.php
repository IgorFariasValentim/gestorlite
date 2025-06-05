<?php
session_start();
if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    header("Location: dashboard.php");
    exit;
}
$msg = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    if ($usuario === "admin" && $senha === "123") {
        $_SESSION['logado'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $msg = "Usuário ou senha incorretos!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login - GestorLite</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<div class="container">
    <h2>GestorLite</h2>
    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
    <p class="mensagem"><?php echo $msg; ?></p>
</div>
</body>
</html>