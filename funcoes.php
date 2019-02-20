<?php

//CADASTRA RESIDENCIAS
function cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos){
    $query = "INSERT INTO residencias (residencia_descricao, residencia_numero, residencia_comodos)
    VALUES ('{$residenciaDescricao}', {$residenciaNumero}, '{$residenciaComodos} Comodos')";
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
function deletaResidencia($conexao){
    $query = "DELETE FROM residencias where id = {'$id'}";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

// VALIDA OS CAMPOS DO FORMULARIO DE CADASTRO PARA RESIDENCIA
function validaCamposFormularioResidencia($residenciaDescricao,$residenciaNumero,$residenciaComodos){
    if ($residenciaDescricao == null || $residenciaNumero == null || $residenciaComodos == null){
        echo "Falta informação";
        header("Location: formularioResidencia.php");
        die();
    }
}