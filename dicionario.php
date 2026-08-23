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
    </head>
    <body id="page-top" style="background-color: #fffbf0;">

<?php include "header.php" ?>
        <!-- Header-->
        <header class="text-black">
            <div class="container py-2 text-center">
                <h1 class="fw-bolder m-0" style="font-family: 'inter', Helvetica, sans-serif; font-size: 2.2rem;">SINAIS NA TI - DICIONÁRIO</h1>
            </div>
        </header>
        <!-- Services section-->
        <!-- O botão que controla a visibilidade -->
        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Informática Básica&nbsp; <span class="seta">v</span>
        </button>

<?php
    // Query para listar TODOS os registros da tabela sinais
    $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Informática Básica' ORDER BY nomeSinal ASC";

    include "conexaoBD.php"; 
    $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
    $totalSinais = mysqli_num_rows($res); 

    // Abre a linha da grade antes do loop
    echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


    while($Sinal = mysqli_fetch_assoc($res)){
        $idSinal   = $Sinal['idSinal'];
        $nomeSinal = $Sinal['nomeSinal'];
        $fotoSinal = $Sinal['fotoSinal'];
        $categoriaSinal = $Sinal['categoriaSinal'];
        $descricaoSinal = $Sinal['descricaoSinal'];

        echo "
            <div class='col-6 col-sm-4 col-md-3'>
                <!-- Estrutura do Card Estático (Sem Link) -->
                <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                    
                    <!-- Cabeçalho Azul -->
                    <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                        $nomeSinal
                    </div>
                    
                    <!-- Corpo do Card (Imagem e Descrição) -->
                    <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                        
                        <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                                                
                        <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                            $descricaoSinal
                        </p>
                        
                    </div>
                </div>
            </div>
        ";
    }

    echo "</div>";
?>



        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Lógica Programação&nbsp; <span class="seta">v</span>
        </button>
    <?php
    // Query para listar TODOS os registros da tabela sinais
    $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Lógica de Programação' ORDER BY nomeSinal ASC";

    include "conexaoBD.php"; 
    $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
    $totalSinais = mysqli_num_rows($res); 

    // Abre a linha da grade antes do loop
    echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


    while($Sinal = mysqli_fetch_assoc($res)){
        $idSinal   = $Sinal['idSinal'];
        $nomeSinal = $Sinal['nomeSinal'];
        $fotoSinal = $Sinal['fotoSinal'];
        $categoriaSinal = $Sinal['categoriaSinal'];
        $descricaoSinal = $Sinal['descricaoSinal'];

        echo "
            <div class='col-6 col-sm-4 col-md-3'>
                <!-- Estrutura do Card Estático (Sem Link) -->
                <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                    
                    <!-- Cabeçalho Azul -->
                    <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                        $nomeSinal
                    </div>
                    
                    <!-- Corpo do Card (Imagem e Descrição) -->
                    <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                        
                        <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                        
                        <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                            $descricaoSinal
                        </p>
                        
                    </div>
                </div>
            </div>
        ";
    }

    echo "</div>";
?>

        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Operadores&nbsp; <span class="seta">v</span>
        </button>
        <?php
            // Query para listar TODOS os registros da tabela sinais
            $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Operadores' ORDER BY nomeSinal ASC";

            include "conexaoBD.php"; 
            $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
            $totalSinais = mysqli_num_rows($res); 

            // Abre a linha da grade antes do loop
            echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


            while($Sinal = mysqli_fetch_assoc($res)){
                $idSinal   = $Sinal['idSinal'];
                $nomeSinal = $Sinal['nomeSinal'];
                $fotoSinal = $Sinal['fotoSinal'];
                $categoriaSinal = $Sinal['categoriaSinal'];
                $descricaoSinal = $Sinal['descricaoSinal'];

                echo "
                    <div class='col-6 col-sm-4 col-md-3'>
                        <!-- Estrutura do Card Estático (Sem Link) -->
                        <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                            
                            <!-- Cabeçalho Azul -->
                            <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                                $nomeSinal
                            </div>
                            
                            <!-- Corpo do Card (Imagem e Descrição) -->
                            <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                                
                                <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                                
                                <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                                    $descricaoSinal
                                </p>
                                
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";
        ?>

        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Estruturas de Controle&nbsp; <span class="seta">v</span>
        </button>
        <?php
            // Query para listar TODOS os registros da tabela sinais
            $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Estruturas de Controle' ORDER BY nomeSinal ASC";

            include "conexaoBD.php"; 
            $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
            $totalSinais = mysqli_num_rows($res); 

            // Abre a linha da grade antes do loop
            echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


            while($Sinal = mysqli_fetch_assoc($res)){
                $idSinal   = $Sinal['idSinal'];
                $nomeSinal = $Sinal['nomeSinal'];
                $fotoSinal = $Sinal['fotoSinal'];
                $categoriaSinal = $Sinal['categoriaSinal'];
                $descricaoSinal = $Sinal['descricaoSinal'];

                echo "
                    <div class='col-6 col-sm-4 col-md-3'>
                        <!-- Estrutura do Card Estático (Sem Link) -->
                        <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                            
                            <!-- Cabeçalho Azul -->
                            <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                                $nomeSinal
                            </div>
                            
                            <!-- Corpo do Card (Imagem e Descrição) -->
                            <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                                
                                <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                                
                                <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                                    $descricaoSinal
                                </p>
                                
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";
        ?>

        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Linguagens&nbsp; <span class="seta">v</span>
        </button>
        <?php
            // Query para listar TODOS os registros da tabela sinais
            $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Linguagens' ORDER BY nomeSinal ASC";

            include "conexaoBD.php"; 
            $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
            $totalSinais = mysqli_num_rows($res); 

            // Abre a linha da grade antes do loop
            echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


            while($Sinal = mysqli_fetch_assoc($res)){
                $idSinal   = $Sinal['idSinal'];
                $nomeSinal = $Sinal['nomeSinal'];
                $fotoSinal = $Sinal['fotoSinal'];
                $categoriaSinal = $Sinal['categoriaSinal'];
                $descricaoSinal = $Sinal['descricaoSinal'];

                echo "
                    <div class='col-6 col-sm-4 col-md-3'>
                        <!-- Estrutura do Card Estático (Sem Link) -->
                        <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                            
                            <!-- Cabeçalho Azul -->
                            <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                                $nomeSinal
                            </div>
                            
                            <!-- Corpo do Card (Imagem e Descrição) -->
                            <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                                
                                <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                                
                                <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                                    $descricaoSinal
                                </p>
                                
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";
        ?>

        <button class="botao-titulo" onclick="alternarConteudo(this)" style="font-family: 'inter', Helvetica, sans-serif;">
        Banco de Dados&nbsp; <span class="seta">v</span>
        </button>
        <?php
            // Query para listar TODOS os registros da tabela sinais
            $listarSinais = "SELECT * FROM sinais WHERE categoriaSinal = 'Banco de Dados' ORDER BY nomeSinal ASC";

            include "conexaoBD.php"; 
            $res          = mysqli_query($conn, $listarSinais) or die("Erro ao tentar listar Sinais!");
            $totalSinais = mysqli_num_rows($res); 

            // Abre a linha da grade antes do loop
            echo "<div class='row gx-3 gy-4 mt-4 mb-5 justify-content-center'>"; 


            while($Sinal = mysqli_fetch_assoc($res)){
                $idSinal   = $Sinal['idSinal'];
                $nomeSinal = $Sinal['nomeSinal'];
                $fotoSinal = $Sinal['fotoSinal'];
                $categoriaSinal = $Sinal['categoriaSinal'];
                $descricaoSinal = $Sinal['descricaoSinal'];

                echo "
                    <div class='col-6 col-sm-4 col-md-3'>
                        <!-- Estrutura do Card Estático (Sem Link) -->
                        <div class='card border-0 h-100' style='border-radius: 25px; overflow: hidden; background-color: #ffffff; box-shadow: 0 4px 12px rgba(0,0,0,0.08);'>
                            
                            <!-- Cabeçalho Azul -->
                            <div style='background-color: #0047cc; color: #ffffff; padding: 15px; text-align: center; font-weight: bold; font-size: 1.2rem;'>
                                $nomeSinal
                            </div>
                            
                            <!-- Corpo do Card (Imagem e Descrição) -->
                            <div class='card-body text-center d-flex flex-column align-items-center justify-content-start' style='padding: 25px 20px;'>
                                
                                <video src='$fotoSinal' muted loop playsinline class='video-sinal' style='max-width: 100%; max-height: 180px; object-fit: contain; margin-bottom: 20px;' title='Sinal: $nomeSinal'></video>
                                
                                <p class='card-text' style='color: #222222; font-size: 1rem; line-height: 1.4; margin-bottom: 0;'>
                                    $descricaoSinal
                                </p>
                                
                            </div>
                        </div>
                    </div>
                ";
            }

            echo "</div>";
        ?>
        


        <script>
            //Função botão que esconde/mostra cards dos sinais
            function alternarConteudo(botao) {

                const seta = botao.querySelector('.seta');
                
                const conteudo = botao.nextElementSibling;
                
                if (conteudo) conteudo.classList.toggle('escondido');
                if (seta) seta.classList.toggle('seta-invertida');

                
            }
            //Funcão para rodar vídeos dos sinais
            const videos = document.querySelectorAll('.video-sinal');

            videos.forEach(video => {
                // Quando o mouse entra no card, o vídeo toca
                video.parentElement.addEventListener('mouseenter', () => {
                    video.play();
                });

                video.parentElement.addEventListener('mouseleave', () => {
                    video.pause();
                    video.currentTime = 0; // faz o vídeo voltar para o início
                });
            });

        </script>

<?php include "footer.php"?>
