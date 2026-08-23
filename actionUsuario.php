<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Resultado do cadastro de usuário">
    <meta name="author" content="">
    <title>Cadastro</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <link href="style.css" rel="stylesheet">
</head>

<body id="page-top" style="background-color: #fffbf0;">

<?php include "header.php"; ?>

<main class="container" style="padding-top: 130px; padding-bottom: 80px; min-height: 70vh;">

    <div class="text-center mb-5">
        <h2>Resultado do cadastro</h2>
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nomeUsuario = $emailUsuario = $senhaUsuario = $confirmarSenhaUsuario = $opcaoUsuario = "";
        $erroPreenchimento = false;

        if (empty($_POST["nomeUsuario"])) {
            echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $nomeUsuario = filtrar_entrada($_POST["nomeUsuario"]);

            if (!preg_match('/^[\\p{L} ]+$/u', $nomeUsuario)) {
                echo "<div class='alert alert-warning text-center'>O campo <strong>NOME</strong> deve conter apenas letras!</div>";
                $erroPreenchimento = true;
            }
        }

        if (empty($_POST["emailUsuario"])) {
            echo "<div class='alert alert-warning text-center'>O campo <strong>EMAIL</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $emailUsuario = filtrar_entrada($_POST["emailUsuario"]);

            if (!filter_var($emailUsuario, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='alert alert-warning text-center'>Informe um <strong>EMAIL</strong> válido!</div>";
                $erroPreenchimento = true;
            }
        }

        if (empty($_POST["senhaUsuario"])) {
            echo "<div class='alert alert-warning text-center'>O campo <strong>SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $senhaOriginal = filtrar_entrada($_POST["senhaUsuario"]);

            if (strlen($senhaOriginal) < 3 || strlen($senhaOriginal) > 8) {
                echo "<div class='alert alert-warning text-center'>A <strong>SENHA</strong> deve ter entre 3 e 8 caracteres!</div>";
                $erroPreenchimento = true;
            }

            $senhaUsuario = md5($senhaOriginal);
        }

        if (empty($_POST["confirmarSenhaUsuario"])) {
            echo "<div class='alert alert-warning text-center'>O campo <strong>CONFIRMAR SENHA</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $confirmarSenhaOriginal = filtrar_entrada($_POST["confirmarSenhaUsuario"]);
            $confirmarSenhaUsuario = md5($confirmarSenhaOriginal);

            if (!empty($_POST["senhaUsuario"]) && $senhaUsuario != $confirmarSenhaUsuario) {
                echo "<div class='alert alert-warning text-center'>As <strong>SENHAS</strong> informadas não são iguais!</div>";
                $erroPreenchimento = true;
            }
        }

        if (empty($_POST["opcaoUsuario"])) {
            echo "<div class='alert alert-warning text-center'>O campo <strong>OPÇÃO</strong> é obrigatório!</div>";
            $erroPreenchimento = true;
        } else {
            $opcaoUsuario = filtrar_entrada($_POST["opcaoUsuario"]);
        }

        if (!$erroPreenchimento) {

            include "conexaoBD.php";

            $nomeSeguro = mysqli_real_escape_string($conn, $nomeUsuario);
            $emailSeguro = mysqli_real_escape_string($conn, $emailUsuario);
            $senhaSeguro = mysqli_real_escape_string($conn, $senhaUsuario);
            $opcaoSeguro = mysqli_real_escape_string($conn, $opcaoUsuario);

            $inserirUsuario = "INSERT INTO usuarios (nomeUsuario, emailUsuario, senhaUsuario, opcaoUsuario) VALUES ('$nomeSeguro', '$emailSeguro', '$senhaSeguro', '$opcaoSeguro')";

            if (mysqli_query($conn, $inserirUsuario)) {
                echo "
                    <div class='alert alert-success text-center'>
                        O cadastro do <strong>USUÁRIO</strong> foi efetuado com sucesso!
                    </div>

                    <div class='table-responsive'>
                        <table class='table table-bordered bg-white'>
                            <tr>
                                <th>NOME</th>
                                <td>$nomeUsuario</td>
                            </tr>
                            <tr>
                                <th>EMAIL</th>
                                <td>$emailUsuario</td>
                            </tr>
                            <tr>
                                <th>OPÇÃO</th>
                                <td>$opcaoUsuario</td>
                            </tr>
                        </table>
                    </div>
                ";
            } else {
                echo "<div class='alert alert-danger text-center'>Erro ao tentar cadastrar <strong>USUÁRIO</strong> no banco de dados!</div>";
            }
        }

        if ($erroPreenchimento) {
            echo "
                <div class='text-center mt-4'>
                    <a href='formUsuario.php' class='btn-principal'>Voltar ao cadastro</a>
                </div>
            ";
        }

    } else {
        header("location:formUsuario.php");
        exit;
    }

    function filtrar_entrada($dado) {
        $dado = trim($dado);
        $dado = stripslashes($dado);
        $dado = htmlspecialchars($dado, ENT_QUOTES, 'UTF-8');
        return $dado;
    }

    ?>

</main>

<?php include "footer.php"; ?>

</body>
</html>
