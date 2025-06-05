<?php
include "conexao.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM funcionarios WHERE id=$id");
header("Location: dashboard.php");
exit;