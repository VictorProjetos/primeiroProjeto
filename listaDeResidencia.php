<?php include("cabecalho.php");
include("conexao.php");
include("funcoes.php");
?>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Descrição da Residencia</th>
            <th scope="col">Numero da Residencia</th>
            <th scope="col">Quantidade de Comodos</th>
        </tr>
    </thead>
    <?php
        $residencias = listaResidencia($conexao);
        foreach($residencias as $residencia) :       
    ?>
    <tr>
        <td><?= $residencia['residencia_descricao']?></td>
        <td><?= $residencia['residencia_numero']?></td>
        <td><?= $residencia['residencia_comodos']?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>