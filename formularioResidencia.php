<?php include("cabecalho.php");

?>

<h1>Cadastro de Residencia</h1>

<form action="cadastraResidencia.php" method="POST">
    <table class="table">
        <tr>
            <td>Descrição da Residencia</td>
            <td><input class="form-control" type="text" name="residenciaDescricao"></td>
        </tr>
        <tr>
            <td>Numero da Residencia:</td>
            <td><input class="form-control" type="number" name="residenciaNumero"></td>
        </tr>
        <tr>
            <td>Comodos:</td>
            <td><input class="form-control" type="number" name="residenciaComodos"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
    
</form>