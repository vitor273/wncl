<?php  
session_start();
 $index = $_GET['pos'];
 $emails = $_SESSION['emails'];
 $id = array_search($_SESSION['usuario'], $emails);
 if($index == $id){
    echo"<script language='javascript' type='text/javascript'>
    alert('Nao foi possivel apagar o seu usuario!');
    windows.location.href='iniciar.php'
    </script>";
    exit;
 }
 else{
 unset($_SESSION['nomes'][$index]);
 unset($_SESSION['emails'][$index]);
 unset($_SESSION['generos'][$index]);
 unset($_SESSION['senhas'][$index]);
   
 }
$_SESSION['nomes'] = array_values($_SESSION['nomes']);
$_SESSION['emails'] = array_values($_SESSION['emails']);
$_SESSION['senhas'] = array_values($_SESSION['senhas']);
$_SESSION['generos'] = array_values($_SESSION['generos']);
header("location: listagem.php");


?>