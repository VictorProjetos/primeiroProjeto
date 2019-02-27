<?php
include("funcoesDeUsuario.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso !";
header("Location: index.php");