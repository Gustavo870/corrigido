<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dicionário de Sinais TI</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">

        <style>
        body {
            background-color: #f7f7f0;
            font-family: 'Inter', sans-serif;
            color: #212529;
        }

        /* Hero / Topo */
        .title-hero {
            font-weight: 900;
            letter-spacing: -0.5px;
            color: #0d0d0d;
        }
        .underline-blue {
            text-decoration: underline;
            text-decoration-color: #0d5cda;
            text-decoration-thickness: 4px;
        }
        .text-blue-primary {
            color: #0d5cda;
        }
        .hero-img-wrapper {
            position: relative;
            display: block;
            width: 100%;
            max-width: 1000px; /* Aumenta o limite máximo do container da imagem */
            margin: 0 auto;
        }
        .hero-bg-blob {
            position: absolute;
            top: -10px;
            right: 0;
            width: 85%;
            height: 95%;
            background-color: #0d5cda;
            border-radius: 45% 55% 40% 60% / 50% 45% 55% 50%;
            z-index: 1;
        }
        .hero-img {
            position: relative;
            z-index: 2;
            width: 100%; /* Faz a imagem ocupar 100% da largura do wrapper */
            height: auto;
            display: block;
            transform: scale(1.9); /* Aplica um leve zoom para destacar mais */
        }

        /* Título dos Pilares */
        .divider-title {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            font-weight: 800;
            letter-spacing: 0.5px;
            font-size: 1.1rem;
            color: #0d0d0d;
        }
        .divider-line {
            height: 2px;
            width: 40px;
            background-color: #0d5cda;
        }

        /* Cards Azuis */
        .card-pilar {
            background-color: #0d5cda;
            color: #ffffff;
            border-radius: 16px;
            padding: 24px 16px;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .card-pilar-title {
            font-weight: 800;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.4);
            padding-bottom: 4px;
            margin-bottom: 12px;
            width: fit-content;
        }
        .card-pilar-text {
            font-size: 0.88rem;
            line-height: 1.35;
            font-weight: 600;
            margin: 0;
        }
        .icon-box {
            width: 50px;
            height: 50px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Box Libras */
        .box-libras {
            border: 4.5px solid #0d5cda;
            border-radius: 20px;
            background-color: transparent;
            padding: 28px;
        }

        /* Botão CTA */
        .btn-cta {
            background-color: #05224e;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 700;
            font-size: 1rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
            transition: background-color 0.2s ease-in-out;
        }
        .btn-cta:hover {
            background-color: #0b397d;
            color: #ffffff;
        }
        .btn-icon-circle {
            background-color: #ffffff;
            color: #05224e;
            border-radius: 50%;
            width: 22px;
            height: 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: bold;
        }
    </style>
        
    </head>
    <body id="page-top" style="background-color: #fffbf0;">

    <?php include "header.php"?>
    <br>
    <br>
    <br>
    <main class="container my-5 py-3" style="max-width: 900px;">
        <!-- Seção Hero / Topo -->
        <div class="row align-items-center mb-5">
            <div class="col-md-6 pe-md-4">
                <h1 class="title-hero display-5 mb-3 mt-5">
                    EQUIDADE NA<br>
                    <span class="underline-blue">EDUCAÇÃO</span>
                </h1>
                <p class="text-blue-primary fw-bold mb-3 fs-5" style="line-height: 1.3;">
                    Educação justa.<br>
                    Oportunidades reais.
                </p>
                <p class="text-muted fw-semibold" style="font-size: 0.95rem; line-height: 1.5;">
                    Equidade é garantir que cada pessoa tenha o que precisa para aprender, participar e se desenvolver, respeitando suas diferenças e valorizando suas potencialidades.
                </p>
            </div>
            
            <div class="col-md-6 text-center mt-5 mt-md-0">
                <div class="hero-img-wrapper">
                    <!-- Fundo azul abstrato (se necessário) -->
                    <!-- <div class="hero-bg-blob"></div> -->
                    
                    <img src="assets/img/pessoasSinais.png" alt="Duas pessoas comunicando em Libras" class="hero-img">
                </div>
            </div>
        </div>

        <!-- Divisor Pilares -->
        <div class="divider-title my-5">
            <span class="divider-line"></span>
            <span>PILARES DA EQUIDADE NA EDUCAÇÃO</span>
            <span class="divider-line"></span>
        </div>

        <!-- Cards dos Pilares -->
        <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-lg-4 mb-5">
            <!-- Card 1 -->
            <div class="col">
                <div class="card-pilar shadow-sm">
                    <div class="icon-box">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="9"/>
                            <circle cx="12" cy="7" r="1.5"/>
                            <path d="M9 11h6M12 11v7M10 18h4"/>
                        </svg>
                    </div>
                    <span class="card-pilar-title">ACESSIBILIDADE</span>
                    <p class="card-pilar-text">Recursos e ambientes acessíveis para todos.</p>
                </div>
            </div>
            
            <!-- Card 2 -->
            <div class="col">
                <div class="card-pilar shadow-sm">
                    <div class="icon-box">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                        </svg>
                    </div>
                    <span class="card-pilar-title">INCLUSÃO</span>
                    <p class="card-pilar-text">Valorizar a diversidade e incluir todos.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col">
                <div class="card-pilar shadow-sm">
                    <div class="icon-box">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
                        </svg>
                    </div>
                    <span class="card-pilar-title">APRENDIZAGEM</span>
                    <p class="card-pilar-text">Métodos que respeitam diferentes necessidades.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col">
                <div class="card-pilar shadow-sm">
                    <div class="icon-box">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <span class="card-pilar-title">TECNOLOGIA</span>
                    <p class="card-pilar-text">Usar a tecnologia para facilitar o acesso ao conhecimento.</p>
                </div>
            </div>
        </div>

        <!-- Box Destaque Libras -->
        <div class="box-libras mb-5">
            <div class="row align-items-center">
                <div class="col-md-3 text-center mb-3 mb-md-0">
                    <!-- Ícone Mãos Libras -->
                    <svg width="85" height="85" viewBox="0 0 24 24" fill="none" stroke="#0d5cda" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 11V6a2 2 0 0 0-4 0v5"/>
                        <path d="M14 10V4a2 2 0 0 0-4 0v6"/>
                        <path d="M10 10.5V6a2 2 0 0 0-4 0v8"/>
                        <path d="M18 8a2 2 0 1 1 4 0v6a8 8 0 0 1-8 8h-2c-2.8 0-4.5-.86-5.99-2.34l-3.6-3.6a2 2 0 0 1 2.83-2.82L7 15"/>
                    </svg>
                </div>
                <div class="col-md-9">
                    <h2 class="fw-bold h3 mb-2" style="color: #0d0d0d;">
                        Libras também é ferramenta de equidade.
                    </h2>
                    <p class="text-secondary mb-0 fw-medium" style="font-size: 0.98rem; line-height: 1.4;">
                        Quando a Libras está presente na educação, a comunicação acontece e a inclusão se torna real.
                    </p>
                </div>
            </div>
        </div>

        <!-- Seção CTA (Call To Action) -->
        <div class="text-center py-3">
            <h2 class="fw-extrabold h3 mb-2" style="color: #0d0d0d; font-weight: 800;">
                Quer continuar aprendendo?
            </h2>
            <p class="text-secondary fw-semibold mb-4" style="font-size: 0.95rem;">
                Explore o dicionário de sinais de informática em Libras e descubra mais conteúdos.
            </p>
            <a href="dicionario.php" class="btn-cta">
                Explorar o dicionário
                <span class="btn-icon-circle">&#10095;</span>
            </a>
        </div>
    </main>

    <?php include "footer.php"?>