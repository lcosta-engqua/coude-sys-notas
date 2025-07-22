<?php

include("conexao.php");

if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['tipo'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo = $_POST['tipo']; 
    
    // Verificando o tipoID baseado na seleção do usuário
    if($tipo == 'aluno'){
        $tipo_id = 1; // 1 = aluno na tabela tipo_usuario
    } elseif($tipo == 'professor'){
        $tipo_id = 2; // 2 = professor na tabela tipo_usuario
    }
    
    // Inserindo no banco
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo_id) VALUES('$nome', '$email', '$senha', '$tipo_id')";
    $stmt = $mysqli->prepare($sql);

    // Executando a query
    if($stmt->execute()){
        if($tipo == 'aluno'){
            header("Location: http://localhost/boletim/aluno.php");
        } elseif($tipo == 'professor'){
            header("Location: http://localhost/boletim/professor.php");
        }
    } else {
        echo "Erro ao registrar usuário: " . $stmt->error;
    }

    
    $stmt->close();
}




