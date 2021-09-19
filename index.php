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
                        <form method="get" action="exercicio.php">
                            <input type="hidden" name="dir/file" value="teste">
                            <li><input type="submit" value="Exercício A teste"></li>
                        </form>
                        <li><a href="exercicio.php">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 02 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 03 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 04 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 05 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 06 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 07 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 08 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
                    </ul>
                </div>
                <div class="opcao">
                    <h3>Módulo 09 </h3>
                    <ul>
                        <li><a href="#">Exercício A</a></li>
                        <li><a href="#">Exercício B</a></li>
                        <li><a href="#">Exercício C</a></li>
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