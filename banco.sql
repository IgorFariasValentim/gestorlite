CREATE DATABASE IF NOT EXISTS gestorlite;
USE gestorlite;
CREATE TABLE IF NOT EXISTS funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cargo VARCHAR(100)
);