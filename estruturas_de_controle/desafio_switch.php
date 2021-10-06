<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
	<input type="text" name="param">
	<select name="tipo_conversao">
		<option value="km-milha">km - milhas</option>
		<option value="milha-km">milhas - km</option>
		<option value="km-metro">km - metros</option>
		<option value="metro-km">metros - km</option>
		<option value="celsius-farenheit">graus celsius - graus farenheit</option>
		<option value="farenheit-celsius">graus farenheit - graus celsius</option>
	</select>
	<input type="submit" value="Converter">
</form>

<?php
	$selecao = $_POST['tipo_conversao'];
	$valor = $_POST['param'];
	if(isset($selecao) && isset($valor)) {
		switch($selecao) {
			case 'km-milha':
				$result = $valor*0.62137;
				echo "Resultado == $result";
				break;
			case 'milha-km':
				$result = $valor/0.62137;
				echo "Resultado == $result";
				break;	
			case 'km-metro':
				$result = $valor*1e3;
				echo "Resultado == $result";
				break;	
			case 'metro-km':
				$result = $valor/1e3;
				echo "Resultado == $result";
				break;	
			case 'celsius-farenheit':
				$result = $valor*1.8 + 32;
				echo "Resultado == $result";
				break;	
			case 'farenheit-celsius':
				$result = ($valor-32)/1.8;
				echo "Resultado == $result";
				break;
			default:
				echo 'Algo deu errado kk';
		}
	}	  
?>
