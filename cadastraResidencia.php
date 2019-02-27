<?php include("cabecalho.php");
include("conexao.php");
include("funcoes.php");
include("funcoesDeUsuario.php");
verificaUsuario();
if(isset($_SESSION["success"])){ ?>
    <p class="alert-success"><?=$_SESSION["success"]?></p>
<?php 
    unset($_SESSION["success"]);    
}

$residenciaDescricao = $_POST["residenciaDescricao"];
$residenciaNumero = $_POST["residenciaNumero"];
$residenciaComodos = $_POST["residenciaComodos"];

validaCamposFormularioResidencia($residenciaDescricao,$residenciaNumero,$residenciaComodos);

if(cadastraResidencia($conexao, $residenciaDescricao, $residenciaNumero, $residenciaComodos)){ ?>
    <p class="text-success">Residencia cadastrada com sucesso !</p>
<?php } else {
            $mensagemDeErro = mysqli_error($conexao) ?>
        ?<p>Erro ao cadastrar <?=$mensagemDeErro?></p>
<?php } 

include("rodape.php");

?>
