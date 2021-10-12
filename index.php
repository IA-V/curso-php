<?php
	require_once('verificacao_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Projeto do Curso de PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice de exercícios</h2>
    </header>
    <nav class="navegacao">
        <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
        <a class="vermelho" href="logout.php">Sair</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <nav class="menu">
                <div class="opcao">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integrcacao HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios</a></li>
                        <li><a href="exercicio.php?dir=basico&file=desafio">Desafio</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 02 - Tipos</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=tipos&file=int">Tipo Inteiro</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=float">Tipo Float</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=aritmeticas">Operações Aritméticas</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=desafio_precedencia">Desafio de Precedência</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=strings">Tipo String</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=booleano">Tipo Booleano</a></li>
                        <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 03 - Variáveis</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis">Desafio</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=atribuicoes">Atribuições</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=desafio_variaveis_variaveis">Desafio Variáveis Variáveis</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor X referencia</a></li>
                        <li><a href="exercicio.php?dir=variaveis&file=constantes">Constantes</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 04 - Estruturas de Controle</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=desafio_ec">Desafio</a></li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=operadores_logicos">Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=desafio_operadores_logicos">Desafio Operadores Logicos</a></li>
                        <li><a href="exercicio.php?dir=estruturas_de_controle&file=desafio_switch">Desafio Switch</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 05 - Arrays</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=arrays&file=basico">Basico</a></li>
                        <li><a href="exercicio.php?dir=arrays&file=mapas">Mapas</a></li>
                        <li><a href="exercicio.php?dir=arrays&file=operacoes">Operacoes</a></li>
                        <li><a href="exercicio.php?dir=arrays&file=matrizes">Matrizes</a></li>
                        <li><a href="exercicio.php?dir=arrays&file=comparacao">Comparacao</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 14 - Sessão e Cookies</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=sessao&file=sessao_basico">Basico</a></li>
                        <li><a href="exercicio.php?dir=sessao&file=gerenciando_sessao">Gerenciando Sessão</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>

    <footer class="rodape">
        Curso PHP © <?= date('Y'); ?>
    </footer>
</body>
</html>
