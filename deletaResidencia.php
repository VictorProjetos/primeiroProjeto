<?php
include("conexao.php");
include("funcoes.php");

$id = $_POST['id'];

deletaResidencia($conexao, $id);

header("Location: listaDeResidencia.php");
die();