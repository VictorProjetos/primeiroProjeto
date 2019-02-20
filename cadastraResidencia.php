<?php include("cabecalho.php");
include("conexao.php");
include("funcoes.php");

$residenciaDescricao = $_POST["residenciaDescricao"];
$residenciaNumero = $_POST["residenciaNumero"];
$residenciaComodos = $_POST["residenciaComodos"];

if(cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos)){ ?>
    <p class="text-success">Residencia cadastrada com sucesso !</p>
<?php } else {
            $mensagemDeErro = mysqli_error($conexao) ?>
        ?<p>Erro ao cadastrar <?=$mensagemDeErro?></p>
<?php } 

include("rodape.php");

?>
