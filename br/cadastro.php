<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    if(in_array($email, $_SESSION['emails'])){

    }
    $_SESSION['nomes'][] = $nome;
    $_SESSION['emails'][] = $email;
    $_SESSION['generos'][] = $genero;
    $_SESSION['senhas'][] = $senha;
    header("Location: iniciar.php");
}
?>