<?php

//CADASTRA RESIDENCIAS
function cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos){
    $query = "INSERT INTO residencias (residencia_descricao, residencia_numero, residencia_comodos)
    VALUES ('{$residenciaDescricao}', '{$residenciaNumero}', '{$residenciaComodos}')";
    return mysqli_query($conexao, $query);
}

//LISTA RESIDENCIAS
function listaResidencia($conexao){
    $listaResidencia = array();
    $query = "SELECT * FROM residencias";
    $resultado = mysqli_query($conexao, $query);

    while($residencia = mysqli_fetch_assoc($resultado)){
        array_push($listaResidencia, $residencia);
    }
    return $listaResidencia; 
}

// DELETA RESIDENCIAS
function deletaResidencia($conexao, $id){
    $query = "DELETE FROM residencias where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

// VALIDA OS CAMPOS DO FORMULARIO DE CADASTRO PARA RESIDENCIA
function validaCamposFormularioResidencia($residenciaDescricao,$residenciaNumero,$residenciaComodos){
    if ($residenciaDescricao == null || $residenciaNumero == null || $residenciaComodos == null){
        header("Location: formularioResidencia.php?invalido=true");
        die();
    }
}

// EDITA RESIDENCIA NO BANCO
function editaResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos, $id){
    $query = "UPDATE 
                residencias 
            SET 
                residencia_descricao = '{$residenciaDescricao}',
                residencia_numero = '{$residenciaNumero}',
                residencia_comodos =  '{$residenciaComodos}' 
            WHERE id = {$id}";
            
    $resultado = mysqli_query($conexao, $query);
}

// BUSCA RESIDENCIA NO BANCO
function buscaResidencia($conexao, $id){
    $query = "SELECT * FROM residencias WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $query);
    $residencias = mysqli_fetch_assoc($resultado);
    return $residencias;
}

// BUSCA USUARIO NO BANCO
function buscaUsuario($conexao, $email, $senha){
    $senhaMd5 = md5($senha);
    $query = "SELECT * FROM usuarios WHERE email='{$email}' AND senha='{$senhaMd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuarios = mysqli_fetch_assoc($resultado);
    return $usuarios;   
}

// CADASTRA MORADOR
function cadastraMorador ($conexao, $nomeCompleto, $idade, $telefone) {
    $query = "INSERT INTO 
                moradores (nome_completo, idade, telefone)
            VALUES
                ('{$nomeCompleto}', '{$idade}', '{$telefone}')";
    return mysqli_query($conexao, $query); 
}