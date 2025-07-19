<?php

if(!empty($_POST['email']) && !empty($_POST['senha'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    session_start();

    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;

    echo "Bem-vindo, " . $email;
}