<?php
    include 'conexao.php'; // Faz a conexão com o banco de dados

    // Pega os valores que vieram do formulário e guarda em variáveis
    $tituloFormulario = $_POST['titulo'];
    $materiaFormulario = $_POST['materia'];
    $autorFormulario = $_POST['autor'];

    // Cria a consulta
    $sql = "INSERT INTO noticias 
                (titulo, materia, autor) 
            VALUES 
                (:titulo, :materia, :autor)";

    // Prepara a consulta para execução
    $consulta = $conexao->prepare($sql);

    // Passa os valores para a consulta e executa no banco
    $consulta = $consulta->execute([
        ':titulo' => $tituloFormulario,
        ':materia' => $materiaFormulario,
        ':autor' => $autorFormulario
    ]);

    // Verificar se deu certo
    if($consulta){
        $mensagem = "Notícia cadastrada com sucesso!";
    }else {
        $mensagem = "Não foi possivel cadastrar a notícia";
    }
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

        <div class="mensagem">
            <h1><?= $mensagem ?></h1>
        </div>

        <div class="voltar">
            <a href="index.php">Voltar</a>
        </div>
    </body>
</html>