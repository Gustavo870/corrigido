<script>
    //Função para a barra de pesquisa
    function filtrarConteudoPagina() {
        
        const termo = document.getElementById('inputPesquisa').value.toLowerCase().trim();
        

        const cards = document.querySelectorAll('.card');
        
        if (cards.length > 0) {
            cards.forEach(card => {

                const coluna = card.closest('[class*="col-"]');
                const conteudoTexto = card.textContent.toLowerCase();
                
                if (conteudoTexto.includes(termo)) {
                    if (coluna) coluna.style.display = '';
                } else {
                    if (coluna) coluna.style.display = 'none'; 
                }
            });

 
            if (termo !== '') {
                document.querySelectorAll('.row').forEach(row => {
                    row.classList.remove('escondido');
                });
            }
        } 

        else {
            const elementosTexto = document.querySelectorAll('p, h1, h2, h3, li');
            elementosTexto.forEach(el => {
                if (termo !== '' && el.textContent.toLowerCase().includes(termo)) {
                    el.style.backgroundColor = '#fff3cd'; // Destaque amarelo suave
                } else {
                    el.style.backgroundColor = ''; // Restaura o fundo original
                }
            });
        }
    }
</script>

<footer>

    <div class="footer-container">


        <div class="footer-conteudo">


            <div class="footer-coluna">

                <h3>NAVEGAÇÃO</h3>
                <a href="index.php">INÍCIO</a>
                <a href="#sinais">SINAIS NA TI (DICIONÁRIO)</a>
                <a href="#libras">IMPORTÂNCIA DA LIBRAS</a>
                <a href="#equidade">EQUIDADE NA EDUCAÇÃO</a>
                <a href="#">CONTATO</a>
            </div>
        </div>
        <div class="copyright">
            © 2025 PLATAFORMA DE INCLUSÃO EM INFORMÁTICA.
            TODOS OS DIREITOS RESERVADOS.
        </div>
        <p class="footer-frase">
            Sinais retirados de <a href="https://wiki.vlibras.gov.br/" target="_blank" rel="" style="color: #ffffff; text-decoration: none;">WikiLibras - LAViD</a>
        </p>
        <p class="footer-frase">
            Conectando Libras, tecnologia e educação.
        </p>
    </div>
</footer>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>