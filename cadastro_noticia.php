<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>FakeNews - O jornal necessário</title>
    </head>
    <body>
        <h1>FakeNews - O jornal necessário</h1>

        <h4>Cadastro de Notícia</h4>

        <form action="salvar_noticia.php" method="POST">
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo">
            </div>

            <div>
                <label for="materia">Matéria</label>
                <textarea name="materia" id="materia" cols="5"></textarea>
            </div>

            <div>
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor">
            </div>

            <input type="submit" value="Salvar">
        </form>
    </body>
</html>