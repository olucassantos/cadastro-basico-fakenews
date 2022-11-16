<?php
    include 'conexao.php'; // Faz a conexão com o banco de dados

    // Pega os campos que vieram do formulário
    // e os armazena em variáveis.
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $materia = $_POST['materia'];
    $autor = $_POST['autor'];

    // Cria a SQL para atualizar os valores no banco
    $sql = "UPDATE 
                noticias 
            SET
                titulo = :titulo,
                materia = :materia,
                autor = :autor
            WHERE 
                id = :id";

    // Prepara a SQL para ser executada
    $consulta = $conexao->prepare($sql);

    // Executa a SQL atribuindo os valores aos campos.
    $consulta = $consulta->execute([
        ':titulo' => $titulo,
        ':materia' => $materia,
        ':autor'  => $autor,
        ':id' => $id
    ]);

    if($consulta){
        echo "Notícia atualizada com sucesso";
    }else{
        echo "Erro ao atualizar notícia";
    }