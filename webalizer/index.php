<?php
/* $dados =["Maria","Beto","Beth"];
$conteudo = json_encode($dados, JSON_PRETTY_PRINT);
file_put_contents("dados.jason",$conteudo);  */   
$conteudo = file_get_contents("dados.json");
$dados = json_decode($conteudo, true);
print_r($dados);
?>