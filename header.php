<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start(); // Inicia sessão apenas se não estiver iniciada
    }

    // Configura o fuso horário para América/São Paulo
    date_default_timezone_set('America/Sao_Paulo');

    $logado = isset($_SESSION['logado']) && $_SESSION['logado'] === true;
    if ($logado) {
        $idUsuario    = $_SESSION['idUsuario'];
        $nomeUsuario  = $_SESSION['nomeUsuario'];
        $emailUsuario = $_SESSION['emailUsuario'];
        $opcaoUsuario = $_SESSION['opcaoUsuario'];

        $nomeCompleto = explode(' ', $nomeUsuario);
        $primeiroNome = $nomeCompleto[0];
    }
?>

<nav class="navbar navbar-expand-lg fixed-top" id="mainNav">

    <div class="navbar-container">

        <a class="navbar-brand" href="index.php">
            PLATAFORMA DE INCLUSÃO EM INFORMÁTICA
        </a>

        <!-- BOTÃO DO MENU MOBILE -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Abrir menu"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        INÍCIO
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="equidadeEducacao.php">
                        EQUIDADE NA EDUCAÇÃO
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="importanciaLibras.php">
                        IMPORTÂNCIA DA LIBRAS
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="dicionario.php">
                        SINAIS NA TI
                    </a>
                </li>

            </ul>

            <!-- BOTÃO DINÂMICO DE LOGIN / PERFIL -->
            <?php if ($logado): ?>
                <a href="perfil.php" class="btn-login">
                    MEU PERFIL (<?php echo htmlspecialchars($primeiroNome); ?>)
                </a>
            <?php else: ?>
                <a href="formLogin.php" class="btn-login">
                    LOGIN
                </a>
            <?php endif; ?>

            <!-- PESQUISA -->
            <form class="search-form" onsubmit="event.preventDefault();">
                <input
                    id="inputPesquisa"
                    type="text"
                    placeholder="Pesquisar..."
                    aria-label="Pesquisar"
                    onkeyup="filtrarConteudoPagina()"
                >
            </form>

        </div>

    </div>

</nav>