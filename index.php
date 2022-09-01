<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estilo.css">
        <title>FakeNews - O jornal necessário</title>
    </head>
    <body>
        <h1>FakeNews - O jornal necessário</h1>

        <a href="cadastro_noticia.php">Cadastrar nova Notícia</a>

        <h1>FakeTicias</h1>

        <?php
            include 'conexao.php'; // Faz a conexão com o banco de dados

            // Criar a consulta
            $sql = "SELECT * FROM noticias";

            // Executa a consulta no banco de dados
            $resposta = $conexao->query($sql);

            // Guarda os resultados em uma variável
            $noticias = $resposta->fetchAll();
        ?>

        <?php foreach ($noticias as $noticia) { // Laço de repetição para as noticias que vieram do banco ?>
            <div class="noticia">
                <h2><?= $noticia['titulo'] ?></h2>

                <p>
                    Autor: <?= $noticia['autor'] ?>
                </p>

                <a href="mostra_noticia.php?id=<?= $noticia['id'] ?>">Ver Noticia</a>
            </div>
        <?php } ?>
    </body>
</html>