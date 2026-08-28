<?php 
    include "header.php"; 
    echo "<br><br><br><br><br>";
    include "conexaoBD.php";

    // Verifica se o usuário está logado
    if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
        header("Location: index.php");
        exit();
    }

    // Busca os dados do usuário atual logado
    $idUsuarioLogado = $_SESSION['idUsuario'];
    $sqlUsuario = "SELECT nomeUsuario, emailUsuario, opcaoUsuario FROM usuarios WHERE idUsuario = '$idUsuarioLogado'";
    $resUsuario = mysqli_query($conn, $sqlUsuario) or die("Erro ao tentar buscar dados do usuário!");

    if ($registro = mysqli_fetch_assoc($resUsuario)) {
        $nomeUsuario  = htmlspecialchars($registro['nomeUsuario']);
        $emailUsuario = htmlspecialchars($registro['emailUsuario']);
        $opcaoUsuario = htmlspecialchars($registro['opcaoUsuario']);
    } else {
        $nomeUsuario  = htmlspecialchars($_SESSION['nomeUsuario']);
        $emailUsuario = htmlspecialchars($_SESSION['emailUsuario']);
        $opcaoUsuario = htmlspecialchars($_SESSION['opcaoUsuario']);
    }

    // Pega a primeira letra do nome para o Avatar
    $inicialAvatar = strtoupper(substr($nomeUsuario, 0, 1));
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Meu Perfil - Dicionário de Sinais TI</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">

    <style>
        body {
            background-color: #f7f7f0;
            font-family: 'Inter', sans-serif;
            color: #1a1a1a;
        }

        /* Lateral / Sidebar */
        .sidebar-card {
            background-color: #ffffff;
            border: 1.5px solid #d0d5dd;
            border-radius: 20px;
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100%;
        }

        .nav-pill-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 16px;
            border-radius: 14px;
            border: 1.5px solid #d0d5dd;
            background-color: #ffffff;
            color: #1a1a1a;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            margin-bottom: 12px;
            transition: all 0.2s ease;
        }

        .nav-pill-item:hover {
            background-color: #f3f4f6;
            color: #1a1a1a;
        }

        .nav-pill-item.active {
            background-color: #dbeafe;
            border-color: #bfdbfe;
            color: #032b69;
        }

        .sidebar-divider {
            border-top: 1.5px solid #d0d5dd;
            margin: 8px 0 16px 0;
        }

        /* Botão de Logout Estilizado */
        .btn-logout {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 14px;
            border: 1.5px solid #dc3545;
            background-color: #ffffff;
            color: #dc3545;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            transition: all 0.2s ease;
            width: 100%;
        }

        .btn-logout:hover {
            background-color: #dc3545;
            color: #ffffff;
        }

        /* Card do Perfil */
        .card-profile {
            background-color: #ffffff;
            border: 1.5px solid #d0d5dd;
            border-radius: 20px;
            padding: 24px;
        }

        .avatar-circle {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background-color: #002b66;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.6rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Card Sobre Você */
        .card-sobre {
            background-color: #e2e4e6;
            border: 2px solid #9ca3af;
            border-radius: 20px;
            padding: 24px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            font-size: 0.95rem;
        }

        .info-label {
            color: #1a1a1a;
            font-weight: 500;
        }

        .info-value {
            color: #1a1a1a;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
    </style>
</head>
<body>

    <main class="container my-4" style="max-width: 1050px;">
        <div class="row g-4">
            
            <!-- Menu Lateral -->
            <div class="col-lg-3 col-md-4">
                <div class="sidebar-card">
                    <div>
                        <a href="perfil.php" class="nav-pill-item active">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                            Meu Perfil
                        </a>

                        <div class="sidebar-divider"></div>

                        <!-- Botão de Sair Centralizado e Estilizado -->
                        <a href="logout.php" class="btn-logout">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            Sair da conta
                        </a>
                    </div>

                    <!-- Ilustração Libras Centralizada -->
                    <div class="d-flex justify-content-center align-items-center w-100 pt-4 pb-2">
                        <img src="assets\img\librasMaos.png" alt="Ilustração de Libras" style="max-width: 300px; border-radius: 12px; height: auto;">
                    </div>
                </div>
            </div>

            <!-- Conteúdo Principal -->
            <div class="col-lg-9 col-md-8">
                <!-- Cabeçalho -->
                <div class="mb-4">
                    <h1 class="fw-bold h2 mb-1" style="color: #0d0d0d;">Meu Perfil</h1>
                    <p class="text-secondary mb-0 fw-medium">Gerencie suas informações e acompanhe sua jornada de aprendizado.</p>
                </div>

                <!-- Card 1: Informações do Usuário -->
                <div class="card-profile mb-4">
                    <div class="d-flex align-items-start mb-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar-circle"><?php echo $inicialAvatar; ?></div>
                            <div>
                                <h2 class="h4 fw-bold mb-0"><?php echo $nomeUsuario; ?></h2>
                                <p class="mb-0 mt-1 fw-medium text-dark" style="font-size: 0.95rem;">
                                    Aprendendo Libras e informática para construir um futuro mais inclusivo.
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row pt-2 g-3">
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#004085" stroke-width="2">
                                <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 0.95rem;">E-mail</div>
                                <div class="text-secondary" style="font-size: 0.9rem;"><?php echo $emailUsuario; ?></div>
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center gap-3">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#004085" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <div>
                                <div class="fw-bold text-dark" style="font-size: 0.95rem;">Membro desde</div>
                                <div class="text-secondary" style="font-size: 0.9rem;">Agosto de 2026</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2: Sobre Você -->
                <div class="card-sobre">
                    <h3 class="fw-bold h4 mb-3" style="color: #0d0d0d;">Sobre Você</h3>
                    
                    <div class="info-row border-bottom border-secondary-subtle">
                        <span class="info-label">Qual opção melhor representa você?</span>
                        <span class="info-value">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                            <?php echo $opcaoUsuario; ?>
                        </span>
                    </div>
                        
                    <div class="info-row border-bottom border-secondary-subtle">
                        <span class="info-label">Nível de conhecimento em Libras</span>
                        <span class="info-value">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                            Iniciante
                        </span>
                    </div>

                    <div class="info-row pt-2">
                        <span class="info-label">Objetivo na plataforma</span>
                        <span class="info-value">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
                            Aprender sinais de informática
                        </span>
                    </div>
                </div>
                            
            </div>
        </div>
    </main>

    <?php include 'footer.php'; ?>
    
</body>
</html>