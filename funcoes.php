<?php

//CADASTRA RESIDENCIAS
function cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos){
    $query = "INSERT INTO residencias (residencia_descricao, residencia_numero, residencia_comodos)
    VALUES (\"$residenciaDescricao\", \"$residenciaNumero\",\"$residenciaComodos\")";
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
    
   
}