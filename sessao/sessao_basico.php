<div class="titulo">Sessao</div>

<?php
	session_start();

	print_r($_SESSION);
	echo '<br>';

	if(!$_SESSION['nome']){
		$_SESSION['nome'] = 'Iago';
	}
	
	if(!$_SESSION['email']){
		$_SESSION['email'] = 'iago@azemail.com';
	}

	print_r($_SESSION);
?>

<p>
	<a href='/sessao/basico_sessao_alterar.php'>Alterar Sessão</a>
</p>
