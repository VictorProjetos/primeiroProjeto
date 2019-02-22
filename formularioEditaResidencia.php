<?php
include("cabecalho.php");
include("conexao.php");
include("funcoes.php");

$id = $_POST['id'];
$residencia = buscaResidencia($conexao, $id);

?>

<h1>Editar Residencia</h1>

<form action="editaResidencia.php" method="POST">   
    <table class="table">
        <tr>
            <td>Descrição da Residencia</td>
            <td><input class="form-control" type="text" name="residenciaDescricao" value="<?=$residencia['residencia_descricao']?>"></td>
        </tr>
        <tr>
            <td>Numero da Residencia:</td>
            <td><input class="form-control" type="text" name="residenciaNumero" value="<?=$residencia['residencia_numero']?>"></td>
        </tr>
        <tr>
            <td>Comodos:</td>
            <td><input class="form-control" type="number" name="residenciaComodos" value="<?=$residencia['residencia_comodos']?>"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Editar</button></td>
        </tr>
        <tr>
            <input type="hidden" name="id" value="<?=$residencia['id']?>">
        </tr>
    </table>
    
</form>