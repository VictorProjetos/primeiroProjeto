<?php include("cabecalho.php");

if(isset($_GET["logado"]) && $_GET["logado"]==true){ ?>
    <p class="alert-success">Logado com sucesso !</p>
<?php }
if (isset($_GET["logado"]) && $_GET["logado"]==false){ ?>
    <p class="alert-danger">Usuario ou senha invalido !</p>
<?php } ?> 
<h1>Bem Vindo !</h1>

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
<?php include("rodape.php")?>