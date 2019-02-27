<?php
include("cabecalho.php");
include("funcoes.php");
include("conexao.php");
?>

<form action="cadastraMorador.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome Completo do Morador</td>
            <td><input class="form-control" type="text" name="nomeMorador"></td>
        </tr>
        <tr>
            <td>Idade do Morador</td>
            <td><input class="form-control" type="number" name="idadeMorador"></td>
        </tr>
        <tr>
            <td>Telefone para contato</td>
            <td><input class="form-control" type="number" name="telefoneMorador"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    <table>

</form>