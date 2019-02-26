<?php
include("conexao.php");
include("funcoes.php");
include("funcoesDeUsuario.php");

verificaUsuario();
$id = $_POST['id'];

deletaResidencia($conexao, $id);

header("Location: listaDeResidencia.php");
die();