<?php
session_start();

    require_once("conexao.php");
    require_once("funcoes.php");

    if (!empty($_POST["nome"]) and !empty($_POST["email"])) {
        $nome  = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        verificar_email($conn,$email);
        cadastrar_usuario($conn,$nome,$email,1);
        $_SESSION['id']   = $conn->lastInsertId();
        echo "ULTIMO ID: $_SESSION[id]";
    }else{
        header('location:../index.html');
    }
    
$conn = null
?> 