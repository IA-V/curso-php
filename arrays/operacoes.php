<div class="titulo">Operacoes com Arrays</div>

<?php
	$dados1 = ['nome' => 'irineu', 'idade' => 28];
	$dados2 = ['nome' => 'vc n sabe nem eu', 'naturalidade' => 'Fortaleza'];
	$dados3 = ['nome' => 'kkkkkkkk'];

	print_r($dados1 + $dados3 + $dados2); /* O array mais à esquerda tem prioridade sobre o da direita. 
				     * Se existirem chaves repetidas, o valor da chave do array
                                     * mais à esquerda sera preservado!
				    */

	print '<br>' . is_array($dados2);
	print '<br>' . count($dados2); // conta a qtd de elementos do array
	print '<br>' . array_rand($dados2); // seleciona um indice (ou chave) do array aleatoriamente
	$indice = array_rand($dados2);

	echo "<br>$indice == $dados2[$indice]";

	unset($dados2['nome']); // remove o elemento 'nome' do array e libera seu espaco na memoria

	echo '<br>', var_dump($dados2['nome']);
	echo "<br>{$dados2['nome']}"; // Nao exibe nada!

	$numeros = [1, 2, 3, 5, 8];
	$outros_numeros = [4, 6, 7];
	$array_mesclado = array_merge($numeros, $outros_numeros); /* adiciona os elementos do segundo parametro ao final do
	 							   * primeiro!
								  */
	print_r($array_mesclado);

	sort($array_mesclado);
	echo '<br><br>';
	print_r($array_mesclado);
?>
