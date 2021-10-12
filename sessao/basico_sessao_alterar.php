<?php
	session_start();

	print_r($_SESSION);
?>

<p>
	<b>Nome: </b> <?= $_SESSION['nome']; ?><br>
	<b>Email: </b> <?= $_SESSION['email']; ?>
</p>

<?php
	$_SESSION['email'] = 'iago_novo@azemail.com.br'
?>

<p>
	<a href='sessao_basico.php'>Voltar</a>
</p>

<p>
	<a href='basico_sessao_limpar.php'>Limpar</a>
</p>
	

