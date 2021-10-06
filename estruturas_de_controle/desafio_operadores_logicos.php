<div class="titulo">Desafio Operadores Logicos</div>

<form action="#" method="post">
	<select name="opcao1">
		<option value="1">Executado</option>
		<option value="0">Nao Executado</option>
	</select>
	<select name="opcao2">
		<option value="1">Executado</option>
		<option value="0">Nao Executado</option>
	</select>
	<input type="submit" value="Submeter"></input>
</form>

<?php
	$opcao1 = $_POST['opcao1'];
	$opcao2 = $_POST['opcao2'];

	echo $_POST['opcao1'];
	echo $_POST['opcao2'];

	if(isset($opcao1) && isset($opcao2)) {
		if($opcao1 && $opcao2) {
			echo '<br>TV 50\' e Sorvete';
		} else if($opcao1 xor $opcao2) {
			echo '<br>TV 32\' e Sorvete';
		} else if(!$opcao1 && !$opcao2) {
			echo '<br>Fica em casa - mais saudavel!';
		}
	}

	/* Wild operador ternario kk
	*  1 > 3 ? valor_se_verdadeiro : valor_se_falso;
	* */
?>
