<?php
    include 'conexao.php'; // Faz a conexão com o banco de dados

    $id = $_GET['id'];

    // Criar a consulta
    $sql = "SELECT * FROM noticias WHERE id = $id";

    // Executa a consulta no banco de dados
    $res = $conexao->query($sql);

    // Pega os resultados e guarda na variável
    $noticia = $res->fetch();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>FakeNews - O jornal necessário</title>
    </head>
    <body>
        <h1>FakeNews - O jornal necessário</h1>
        <hr>

        <h1><?= $noticia['titulo'] ?></h1>

        <h2><?= $noticia['materia'] ?></h2>

        <h4><?= $noticia['autor'] ?></h4>

        <div class="voltar">
            <a href="index.php">Voltar</a>
        </div>
    </body>
</html>