<?php include("cabecalho.php");

?>

<h1>Cadastro de Residencia</h1>

<form action="cadastraResidencia.php" method="POST">
    <div class="fomr-row">
        <div class="form-group">
            <label for="residenciaDescricao">Descrição da Residencia</label>
            <input class="form-control" type="text" name="residenciaDescricao">
        </div>
        <div class="form-group col-md-6">
            <label>Numero da Residencia:</label>
            <input class="form-control" type="text" maxlength="5" name="residenciaNumero"></td>
        </div>
        <div class="form-group col-md-6">
            <label>Comodos:</label>
            <input class="form-control" type="number" name="residenciaComodos">
        </div>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </div> 
</form>