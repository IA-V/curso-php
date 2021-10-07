<div class="titulo">Mapas</div>

<?php
	$array_mapa = array(
		"idade" => 25,
		"cor" => 'verde',
		"peso" => 49.9
	);

	var_dump($array_mapa);
	echo '<br>' . print_r($array_mapa);

	echo "<br>$array_mapa[0]"; /* <-- indices nao funcionam por causa do 'mapeamento' com as chaves.
	 			    * nada eh exibido!
				   */
	echo 'var_dump() do array com indice == ', var_dump($array_mapa[0]);
	echo "<br>{$array_mapa['idade']}";
	echo "<br>{$array_mapa['cor']}";
	echo "<br>{$array_mapa['peso']}";

	$outro_array = array( /*tbm eh possivel mapear alternadamente*/
		'a',
		8 => 'uau',
		"cafe" => 'com pao',
		"f"
	);

	echo '<br>';
	print_r($outro_array);

	$outro_array[] = 'outro elemento sem mapeamento manual';
	$outro_array['kk'] = 'outro elemento com mapeamento manual'; /*Em insercao de elementos com mapeamento manual, 
	 							      *o valor logico 'false' eh convertido pra 0
	 							      *e o valor 'true' eh convertido pra 1
	 							     */

	echo '<br>';
	print_r($outro_array);

	echo '<br>';
	print_r($_GET);
?>
