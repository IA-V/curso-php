<div class="titulo">Gerenciando Sessão</div>

<?php
	/*session_id("0olnb1k0jhn944e9g00a1dcsit"); /* <-- define o id da sessao pra essa string!
						   * se for aberto outro navegador (diferente do atual), a sessao sera a msm
						  */
	session_start();
	echo session_id();

	$contador = &$_SESSION['contador'];

	$contador = $contador ? $contador + 1 : 1;

	echo '<br>' . $contador;

	if($contador % 5 === 0){
		session_regenerate_id(); /* <-- gera outro id para a sessao!!*/
	}

	if($contador >= 15){
		session_destroy();
	}

	/* A partir do ID da sessao, eh possivel acessar as informacoes da sessao, entao, por seguranca, uma boa pratica
	 * eh gerar um novo ID de vez em quando
	*/
?>
