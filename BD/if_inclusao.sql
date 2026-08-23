-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/08/2026 às 15:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `if_inclusao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinais`
--

CREATE TABLE `sinais` (
  `idSinal` int(11) NOT NULL,
  `nomeSinal` varchar(100) NOT NULL,
  `fotoSinal` varchar(200) NOT NULL,
  `categoriaSinal` varchar(100) NOT NULL,
  `descricaoSinal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sinais`
--

INSERT INTO `sinais` (`idSinal`, `nomeSinal`, `fotoSinal`, `categoriaSinal`, `descricaoSinal`) VALUES
(1, 'Computador', 'assets/img/informaticaBasica/computador.MP4', 'Informática Básica', 'Máquina usada para processar informações'),
(3, 'Programa', 'assets/img/informaticaBasica/programa.MP4', 'Informática Básica', 'Conjunto de instruções executadas pelo computador.'),
(4, 'Arquivo', 'assets/img/informaticaBasica/arquivo.MP4', 'Informática Básica', 'Conjunto de informações armazenadas pelo computador.'),
(5, 'Internet', 'assets/img/informaticaBasica/internet.MP4', 'Informática Básica', 'Rede mundial que conecta computadores e dispositivos.'),
(6, 'Lógica de Programação', 'assets/img/logicaProgramacao/logicaProgramacao.MP4', 'Lógica de Programação', 'Organização do raciocínio para criar programas.'),
(7, 'Condicional Simples', 'assets/img/estruturasControle/condicionalSimples.MP4', 'Estruturas de Controle', 'Comando de decisão que executa um bloco de código apenas se um teste lógico retornar o valor verdadeiro.'),
(8, 'Estruturas de Repetição', 'assets/img/logicaProgramacao/estuturasRepeticao.MP4', 'Lógica de Programação', 'Comandos usados na lógica de programação para executar um bloco de código várias vezes seguidas até que uma condição específica seja atendida.'),
(10, 'Váriavel', 'assets/img/logicaProgramacao/variaveis.MP4', 'Lógica de Programação', 'Elemento que armazena um valor'),
(11, 'Igual a', 'assets/img/operadores/igualA.MP4', 'Operadores', 'Verifica se dois valores são iguais.'),
(12, 'Maior ou igual', 'assets/img/operadores/maiorOuIgual.MP4', 'Operadores', 'Operador que verifica se um valor é maior ou igual a outro'),
(13, 'Maior que', 'assets/img/operadores/maiorQue.MP4', 'Operadores', 'Verifica se um valor é maior que o outro.'),
(14, 'Condicional Composta', 'assets/img/estruturasControle/condicionalComposta.MP4', 'Estruturas de Controle', 'Comando que permite ao programa tomar uma decisão e executar caminhos diferentes dependendo se uma condição lógica é verdadeira ou falsa.'),
(15, 'Operador Lógico OU', 'assets/img/operadores/operadorLogicoOu.MP4', 'Operadores', 'Permite que uma das condições seja verdadeira.'),
(16, 'Menor ou Igual', 'assets/img/operadores/menorOuIgual.MP4', 'Operadores', 'Operador que verifica se um valor é menor igual a outro.'),
(17, 'Dados', 'assets/img/informaticaBasica/dados.mp4', 'Informática Básica', 'Informações armazenadas ou processadas'),
(18, 'Algoritimo', 'assets/img/logicaProgramacao/algoritimo.MP4', 'Lógica de Programação', 'Passos claros e ordenados que resolvem um problema ou realizam uma tarefa.'),
(19, 'Windows', 'assets/img/informaticaBasica/windows.MP4', 'Informática Básica', 'Sistema operacional para computadores.'),
(20, 'Linux', 'assets/img/informaticaBasica/linux.MP4', 'Informática Básica', 'Sistema operacional de código aberto para computadores.'),
(21, 'Email', 'assets/img/informaticaBasica/email.MP4', 'Informática Básica', 'Método digital para enviar e receber mensagens e arquivos pela internet.'),
(22, 'Download', 'assets/img/informaticaBasica/download.MP4', 'Informática Básica', 'Método digital para enviar e receber mensagens e arquivos pela internet.'),
(23, 'Google', 'assets/img/informaticaBasica/google.MP4', 'Informática Básica', 'Sistema de busca na internet.'),
(24, 'Google Drive', 'assets/img/informaticaBasica/googleDrive.MP4', 'Informática Básica', 'Serviço de armazenamento e sincronização de arquivos que pertence a Google.'),
(25, 'Inteligência Artifical', 'assets/img/informaticaBasica/inteligenciaArtifical.MP4', 'Informática Básica', 'Campo da ciência da computação que cria sistemas e máquinas capazes de simular o raciocínio, a aprendizagem e o comportamento humano para resolver problemas e tomar decisões.'),
(26, 'Mouse', 'assets/img/informaticaBasica/mouse.MP4', 'Informática Básica', 'Periférico de entrada que move o cursor na tela do computador.'),
(27, 'HTML', 'assets/img/linguagens/html.MP4', 'Linguagens', 'Linguagem padrão usada para criar e estruturar páginas na internet.'),
(28, 'Linguagens de Programação', 'assets/img/linguagens/linguagemProgramacao.MP4', 'Linguagens', 'Sistema formal de escrita que especifica um conjunto de instruções e regras usadas para desenvolver programas.'),
(29, 'Banco de Dados', 'assets/img/bancoDados/bancoDados.MP4', 'Banco de Dados', 'Coleção organizada de informações ou dados estruturados, armazenados de forma eletrônica em um sistema de computador, para permitir acesso, atualização e consulta rápida.'),
(30, 'Modelo Banco de Dados', 'assets/img/bancoDados/modeloBD.MP4', 'Banco de Dados', 'Estrutura lógica que define como os dados são armazenados, organizados e relacionados em um sistema.'),
(31, 'Repetição com Variável de Controle', 'assets/img/estruturasControle/repeticaoVariavelControle.MP4', 'Estruturas de Controle', 'Laço usado quando sabemos de antemão quantas vezes o bloco de código deve rodar.'),
(32, 'Estruturas no Fim', 'assets/img/estruturasControle/estruturaFim.MP4', 'Estruturas de Controle', 'Verificam condição no final.'),
(33, 'Estruturas no Meio', 'assets/img/estruturasControle/estruturaMeio.MP4', 'Estruturas de Controle', 'Verificam coondição durante.'),
(34, 'Estruturas no Início', 'assets/img/estruturasControle/estruturaInicio.MP4', 'Estruturas De Controle', 'Verificam coondição no começo.'),
(35, 'Aplicativo', 'assets/img/informaticaBasica/aplicativo.MP4', 'Informática Básica', 'Programa de software criado para ajudar o usuário em uma tarefa ou função específica.'),
(36, 'Copiar (ctrl c)', 'assets/img/informaticaBasica/copiar.MP4', 'Informática Básica', 'Ação de duplicar um arquivo, texto ou imagem para usá-lo em outro lugar, mantendo o original intacto.'),
(37, 'Recortar (ctrl x)', 'assets/img/informaticaBasica/recortar.MP4', 'Informática Básica', 'Remover um item selecionado (como um texto, arquivo ou imagem) do seu lugar original e guardá-lo temporariamente na memória para movê-lo e colar em outro destino.'),
(38, 'Software', 'assets/img/informaticaBasica/software.MP4', 'Informática Básica', 'Parte lógica de um computador ou dispositivo eletrônico. Trata-se de um conjunto de instruções, dados e programas que orientam o hardware (a parte física) sobre como executar tarefas e funcionar corretamente.'),
(39, 'Código', 'assets/img/logicaProgramacao/codigo.MP4', 'Lógica de Programação', 'Conjunto de instruções escritas em uma linguagem de programação que diz ao computador como executar tarefas, criar softwares, aplicativos e páginas.'),
(40, 'Debug', 'assets/img/logicaProgramacao/debug.MP4', 'Lógica de Programação', 'Processo de encontrar, analisar e corrigir erros — conhecidos como bugs — no código de um programa de computador.'),
(41, 'Bug', 'assets/img/informaticaBasica/bug.MP4', 'Informática Básica', 'Erro, falha ou defeito em um programa de computador ou sistema que faz com que ele funcione mal, trave ou apresente um resultado inesperado.'),
(42, 'Teclado', 'assets/img/informaticaBasica/teclado.MP4', 'Informática Básica', 'Periférico de entrada que serve para digitar textos, números e enviar comandos para o computador.'),
(43, 'Monitor', 'assets/img/informaticaBasica/monitor.MP4', 'Informática Básica', 'Principal dispositivo de saída de um computador. Ele recebe os dados processados pela placa de vídeo e os exibe em forma de imagens, textos e vídeos, permitindo que você veja e use o sistema.'),
(44, 'Input', 'assets/img/logicaProgramacao/input.MP4', 'Lógica de Programação', 'Ato de fornecer dados ou informações para um sistema ou algoritmo processar.'),
(45, 'Output', 'assets/img/logicaProgramacao/Output.MP4', 'Lógica de Programação', 'Resultado final gerado por um programa após processar os dados de entrada.'),
(46, 'Hardware', 'assets/img/informaticaBasica/hardware.MP4', 'Informática Básica', 'Parte física de um computador ou aparelho eletrônico.'),
(47, 'Links', 'assets/img/informaticaBasica/links.MP4', 'Informática Básica', 'Elemento clicável em uma página digital que conecta e direciona o usuário para outro site, documento ou endereço na internet com apenas um toque.'),
(48, 'Site', 'assets/img/informaticaBasica/site.MP4', 'Informática Básica', 'Conjunto de páginas digitais interligadas, hospedadas em um servidor e acessíveis na internet por meio de um endereço único.'),
(49, 'Condição Encadeada Simples', 'assets/img/estruturasControle/condicionalEncadeadaSimples.MP4', 'Estruturas de Controle', 'Estrutura onde um comando de decisão (se/if) fica dentro de outro. Serve para testar uma nova regra apenas se a primeira regra for verdadeira ou falsa.'),
(50, 'Condição Encadeada Heterogênea', 'assets/img/estruturasControle/condicionalEncadeadaHeterogenea.MP4', 'Estruturas de Controle', 'Ocorre quando há vários comandos se (if) aninhados ou encadeados, mas sem um padrão lógico uniforme.'),
(51, 'Condição Encadeada Homogênea', 'assets/img/estruturasControle/condicionalEncadeadaHomogenea.MP4', 'Estruturas de Controle', 'Ocorre quando comandos se-então são encaixados de forma uniforme e exclusiva apenas dentro dos blocos de teste, geralmente equivalendo a uma única validação com múltiplos operadores lógicos ou a uma estrutura de múltipla escolha.'),
(52, 'Colar (ctrl+v)', 'assets/img/informaticaBasica/colar.MP4', 'Informática Básica', 'ato de inserir um conteúdo — como texto, imagem ou arquivo — que foi previamente copiado ou recortado para a memória temporária do sistema (área de transferência)');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL,
  `emailUsuario` varchar(50) NOT NULL,
  `senhaUsuario` varchar(100) NOT NULL,
  `opcaoUsuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `emailUsuario`, `senhaUsuario`, `opcaoUsuario`) VALUES
(1, 'alan', 'baixinhodesouzaa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'SOU UMA PESSOA SURDA');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `sinais`
--
ALTER TABLE `sinais`
  ADD PRIMARY KEY (`idSinal`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sinais`
--
ALTER TABLE `sinais`
  MODIFY `idSinal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
