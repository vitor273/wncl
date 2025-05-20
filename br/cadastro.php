<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=== 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    echo $nome." ".$email." ".$senha." ".$genero;
    $_SESSION['nomes'][] = $nomes;
    $_SESSION['email'][] = $email;
    $_SESSION['generos'][] = $genero;
    $_SESSION['senhas'][] = $senha;
    header("Location: iniciar.php");
}
?>