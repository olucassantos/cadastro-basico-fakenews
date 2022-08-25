<?php
    // Fazer a conexão com o banco de dados
    try {
        $conexao = new PDO("mysql:host=localhost;dbname=fakenews;charset=utf8", "root", "");
    } catch (PDOException $e) {
        echo "Não foi possivel conectar ao banco de dados: " . $e->getMessage();
        exit;
    }
?>