<?php include("cabecalho.php");
include("funcoes.php");
include("funcoesDeUsuario.php");

if(isset($_SESSION["success"])){ ?>
    <p class="alert-success"><?=$_SESSION["success"]?></p>
<?php 
    unset($_SESSION["success"]);    
}

if(isset($_SESSION["danger"])){ ?>
    <p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php
    unset($_SESSION["danger"]);
} ?>
 
<h1>Bem Vindo !</h1>
<?php
if (usuarioEstaLogado()){
?>
    <p class="text-success">Você está logado como <?=usuarioLogado()?> !<a href="logout.php"> Sair</a></p>
<?php
}
else{
?>
<form action="login.php" method="POST">
    <table class="table">
        <tr>
            <td>Email</td>
            <td><input class="form-control" type="email" name="email"></td>
        </tr>
        <tr>
            <td>Senha</td>
            <td><input class="form-control" type="password" name="senha"></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary">Login</button></td>
        </tr>        
    </table>
</form>
<?php
}
include("rodape.php")?>