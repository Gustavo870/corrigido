<?php
    include "conexaoBD.php"; // Inclui o arquivo de conexão com o BD
    session_start();

    $emailUsuario = mysqli_real_escape_string($conn, $_POST['emailUsuario']);
    $senhaUsuario = mysqli_real_escape_string($conn, $_POST['senhaUsuario']);

    // QUERY corrigida (nome da tabela em minúsculo: 'usuarios')
    $buscarLogin = "SELECT *
                    FROM usuarios
                    WHERE emailUsuario = '$emailUsuario'
                    AND senhaUsuario = md5('$senhaUsuario')";

    // Executa a QUERY
    $efetuarLogin = mysqli_query($conn, $buscarLogin);

    // Verifica se encontrou algum registro
    if ($registro = mysqli_fetch_assoc($efetuarLogin)) {
        // Criar variáveis de sessão
        $_SESSION['idUsuario']    = $registro['idUsuario'];
        $_SESSION['nomeUsuario']  = $registro['nomeUsuario'];
        $_SESSION['emailUsuario'] = $registro['emailUsuario'];
        $_SESSION['opcaoUsuario'] = $registro['opcaoUsuario'];
        $_SESSION['logado']       = true;

        // Redireciona para o perfil do usuário
        header("Location: perfil.php");
        exit();
    } else {
        // Redireciona com mensagem de erro
        header("Location: formLogin.php?erroLogin=dadosInvalidos");
        exit();
    }
?>