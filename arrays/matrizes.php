<div class="titulo">Matrizes</div>

<?php 
	$matriz= [
		'array 1'=> ['cafe' => 'cafe com pao', 'onibus' => 'busao'],
		'array 2' => [1, 5, 3, 7],
		'array 3' => ['agripina']
	];

	print_r($matriz);

	echo "<br><br>{$matriz['array 1']['onibus']}";

	$matriz['array 4'] = ['uau', 'carampolas'];
	
	echo '<br><br>';
	print_r($matriz);
	echo "<br><br>{$matriz['array 4'][1]}";

	$matriz['array 3']['sobrenome da agripina'] = 'maria';
	
	echo '<br><br>';
	print_r($matriz);
	echo "<br><br>{$matriz['array 3']['sobrenome da agripina']}";
?>
