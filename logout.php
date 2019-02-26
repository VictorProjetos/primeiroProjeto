<?php
include("funcoesDeUsuario.php");

logout();
header("Location: index.php?logout=true");