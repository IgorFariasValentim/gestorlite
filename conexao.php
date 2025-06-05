<?php
$conn = mysqli_connect("localhost", "root", "", "gestorlite");
if (!$conn) {
    die("Erro ao conectar: " . mysqli_connect_error());
}