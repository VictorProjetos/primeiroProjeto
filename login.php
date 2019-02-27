<?php 
include("conexao.php");
include("funcoesDeUsuario.php");
include("funcoes.php");


$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
if ($usuario == NULL){
    $_SESSION["danger"] = "Usuario ou senha invalido !";
    header("location: index.php");
} else{
    $_SESSION["success"] = "Logado com sucesso !";
    logaUsuario($usuario["email"]);
    header("location: index.php");
}
die();