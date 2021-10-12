<?php
    session_start();
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if(isset($_POST['email'])){
        $usuarios = [
            [
                'nome' => 'Irineu',
                'email' => 'irineu@gmail.com',
                'senha' => '12345'
            ],
            [
                'nome' => 'vc n sabe nem eu',
                'email' => 'vcnsabenemeu@gmail.com',
                'senha' => '678910'
            ]
        ];

        foreach($usuarios as $usuario){
            $email_valido = $usuario['email'] === $email;
            $senha_valido = $usuario['senha'] === $senha;
            
            if($email_valido && $senha_valido) {
                $_SESSION['erros'] = null;
                $_SESSION['usuario'] = $usuario['nome'];
                $tempo_exp = time() + 60*60*24*7;
                setcookie('usuario', $_SESSION['usuario'], $tempo_exp);
                header('Location: index.php');
            }
        }

        
        if(!$_SESSION['usuario']/*Outra forma de verificar se o array esta 'setado'!*/){
            $_SESSION['erros'] = ['Usuario/Senha invalido(s)!'];
        }
    }

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
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Projeto do Curso de PHP</title>
</head>
<body class="login">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Seja Bem-Vindo!</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
		<h3>Identifique-se kk</h3>
		<?php if($_SESSION['erros']): ?>
		<div class="erros">
			<?php foreach($_SESSION['erros'] as $erro): ?>
				<p> <?= $erro ?> </p>
			<?php endforeach ?>
		</div>
		<?php endif ?>
		<form action="#" method="post">
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" id="email">
			</div>
			<div>
				<label for="senha">Senha</label>
				<input type="password" name="senha" id="senha">
			</div>
			<button>Logar</button>
		</form>
        </div>
    </main>

    <footer class="rodape">
        Curso PHP © <?= date('Y'); ?>
    </footer>
</body>
</html>
