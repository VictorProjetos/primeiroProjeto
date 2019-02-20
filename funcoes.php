<?php

//CADASTRA RESIDENCIAS
function cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos){
    $query = "INSERT INTO residencias (residencia_descricao, residencia_numero, residencia_comodos)
    VALUES (\"$residenciaDescricao\", \"$residenciaNumero\",\"$residenciaComodos\")";
    return mysqli_query($conexao, $query);
}