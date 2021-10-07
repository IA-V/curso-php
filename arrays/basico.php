<div class="titulo">Basico de Arrays</div>

<?php
	$array = array(5, 8, 3.4, "texto");

	echo $array . "<br>";

	var_dump($array);
	echo '<br><br>';

	print_r($array);
	echo '<br><br>';

	print "Primeiro elemento do array --> $array[0]<br>";
	print "Segundo elemento do array --> $array[1]<br>";
	print "Terceiro elemento do array --> $array[2]<br>";
	print "Quarto elemento do array --> $array[3]<br>";

	echo $array[10]; /* <-- indice nao existente nao gera erro,
			 *  mas retorna NULL!
			 */
	echo '<br>Retorno de um indice nao existente -> ', var_dump($array[10]);

	$array_texto = "quero café com pao"; /* <-- string == array de
					     *  caracteres kk */
		echo "<br>$array_texto[8]"; /* OBS.: alguns caracteres epeciais
					     * (acentos, tio, etc) tem seu
					     * proprio indice!!!
					    */
		echo "<br>$array_texto[9]"; // Gera erro (n entende o caractere)
		echo "<br>$array_texto[10]"; // Gera erro (n entende o caractere)
		
		/* Uma forma de selecionar os caracteres de uma string
		 * contornando o erro eh usar a funcao 'mb_substr()', que n
		 * vai contar o caractere especial como um caractere separado!
		 * OBSERVE
		*/

		echo "<br>" . mb_substr($array_texto, 9, 1); /* <-- 'mb_' em nomes
							      * de funcoes indica que
   							      * caraceters especiais n sao
							      * considerados separadamente
							     */
		echo "<br>" . substr($array_texto, 9, 1);
?>

