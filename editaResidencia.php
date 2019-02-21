<?php
include("conexao.php");
include("funcoes.php");

$residenciaDescricao = $_POST["residenciaDescricao"];
$residenciaNumero = $_POST["residenciaNumero"];
$residenciaComodos = $_POST["residenciaComodos"];
$id = $_POST["id"];

editaResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos, $id);
header("Location: listaDeResidencia.php");
die();

