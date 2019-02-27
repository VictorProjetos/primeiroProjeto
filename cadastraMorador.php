<?php
include("cabecalho.php");
include("conexao.php");
include("funcoes.php");
include("funcoesDeUsuario.php");

verificaUsuario();

$nomeCompleto = $_POST["nomeMorador"];
$idade = $_POST["idadeMorador"];
$telefone = $_POST["telefoneMorador"];


if (cadastraMorador ($conexao, $nomeCompleto, $idade, $telefone)) { ?>
    <p class="alert-success">Morador cadastrado com sucesso !</p>
<?php
} else {
    $mensagemErro = mysqli_error($conexao); ?>
    <p class="alert-danger"><?=$mensagemErro?></p>
<?php
}
?>