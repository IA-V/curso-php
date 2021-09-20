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

    <main class="principal">
        <div class="conteudo">
            <nav class="menu">
                <div class="opcao">
                    <h3>Módulo 01 - Básico</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=ola">Olá PHP</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integrcacao HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=css">Integracao CSS</a></li>
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