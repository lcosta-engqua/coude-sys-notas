<?php
$mysqli = new mysqli("localhost", "root", "", "sys_notas");

//verifica conexão
if($mysqli->connect_error){
    die ("Erro de conexão: " . $mysqli->connect_error);
} else{
    echo "Conectado!";
}