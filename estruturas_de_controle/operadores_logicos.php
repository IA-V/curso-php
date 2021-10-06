<div class="titulo">Operadores Logicos</div>

<?php
	if(true && true) { // 'and' tambem funciona em vez de '&&'
		echo '<br>cafe';
	}

	if(true and true) {
		echo '<br>cafe2';
	}

	if(true || false) { // 'or' tambem funciona em vez de '||'
		echo '<br>verdadeiro kk';
	}

	/* Para usar 'xor' (OU exclusivo), nao existem caracteres especiais,
	 * apenas o proprio nome 'xor'!
	 * Mas uma forma de simular eh usando o sinal de diferente '!='
	*/

	if(true xor false) {
		echo '<br>uau';
	} else {
		echo '<br>uau2';
	}

	if(true != false) {
		echo '<br>uau';
	} else {
		echo '<br>uau2';
	}
?>
