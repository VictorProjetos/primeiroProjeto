<?php 
include("conexao.php");
include("funcoesDeUsuario.php");
include("funcoes.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == NULL){
    header("location: index.php?logado=0");
} else{
    logaUsuario($usuario["email"]);
    header("location: index.php?logado=1");
}
die();