<?php include("cabecalho.php");
include("conexao.php");
include("funcoes.php");

verificaUsuario();
?>

<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Descrição da Residencia</th>
            <th scope="col">Numero da Residencia</th>
            <th scope="col">Quantidade de Comodos</th>
            <th scope="col">Remover</th>
            <th scope="col">Editar</th>
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
        <form action="deletaResidencia.php" method="POST">
            <input type="hidden" name="id" value="<?=$residencia['id']?>">
            <td><button class="btn btn-danger">Remover</button></td>
        </form>
        <form action="formularioEditaResidencia.php" method="POST">
            <input type="hidden" name="id" value="<?=$residencia['id']?>">
            <td><button class="btn btn-info">Editar</button></td>
        </form>
    </tr>
    <?php
        endforeach
    ?>
</table>
