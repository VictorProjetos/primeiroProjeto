<?php

session_start();
// INICIA COOKIE DO USUARIO
function logaUsuario($usuario){
    $_SESSION["usuario_logado"] = $usuario;
}

// MOSTRA O USUARIO LOGADO
function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

// VERIFICA O USUARIO LOGADO

function usuarioEstaLogado(){
    return isset($_SESSION["usuario_logado"]);
}

// VERIFICA SE O USUARIO ESTA LOGADO
function verificaUsuario(){
    if(!usuarioLogado()){
        header("Location: index.php?semUsuario=true");
        die();
    }
}

function logout(){
    session_destroy();
}