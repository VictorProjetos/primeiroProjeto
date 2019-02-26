<?php
include("conexao.php");
include("funcoes.php");
include("funcoesDeUsuario.php");

verificaUsuario();
$residenciaDescricao = $_POST["residenciaDescricao"];
$residenciaNumero = $_POST["residenciaNumero"];
$residenciaComodos = $_POST["residenciaComodos"];
$id = $_POST["id"];

editaResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos, $id);
header("Location: listaDeResidencia.php");
die();

