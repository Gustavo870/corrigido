<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
    </head>
    <body id="page-top" style="background-color: #fffbf0;">

<?php include "header.php" ?>

    <?php
        //Verifica se há alguma passagem de parâmetro via método GET chamada 'erroLogin'
        if(isset($_GET['erroLogin'])){
            $erroLogin = $_GET['erroLogin'];

            if($erroLogin == 'dadosInvalidos'){
                echo "<div class='alert alert-warning text-center'>EMAIL ou SENHA inválidos!</div>";
            }
        }
    ?>

    <div class="d-flex justify-content-center ">
        <h2>Acessar o sistema:</h2>
    </div>

    <div class="d-flex justify-content-center">
        <form action="actionLogin.php" method="POST" class="was-validated">
            
            <div class="form-floating mt-5 mb-3">
                <input type="email" name="emailUsuario" id="emailUsuario" placeholder="Email" class="form-control" required>
                <label for="emailUsuario">Email</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-floating mt-3 mb-3">
                <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="Senha" class="form-control" minlength="3" maxlength="8" required>
                <label for="senhaUsuario">Senha</label>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
            </div>

            <button type="submit" class="btn btn-outline-dark">Login</button>

        </form>
    </div>

    <div class="d-flex justify-content-center mt-3 mb-3">
        <p>Ainda não é cadastrado? <a href="formUsuario.php" title="Cadastrar-se">Clique aqui!</a>&nbsp</p>
    </div>

<?php include "footer.php" ?>