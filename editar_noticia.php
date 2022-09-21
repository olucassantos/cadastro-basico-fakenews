<?php
    include 'conexao.php'; // Faz a conexão com o banco de dados

    $id = $_GET['id']; // Pegar o ID que veio da rota (URL)

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
        <h4>Edição de Noticia</h4>

        <form action="atualizar_noticia.php" method="POST">
            <input type="hidden" name="id" value="<?= $noticia['id'] ?>">

            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" value="<?= $noticia['titulo'] ?>">
            </div>

            <div>
                <label for="materia">Matéria</label>
                <textarea name="materia" id="materia" cols="5"><?= $noticia['materia'] ?></textarea>
            </div>

            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" value="<?= $noticia['autor'] ?>">
            </div>

            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>