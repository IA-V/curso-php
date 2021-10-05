<div class="titulo">Constantes</div>

<?php
    define("UMA_CONSTANTE_AE", 420);

    echo UMA_CONSTANTE_AE."<br>";
    echo $UMA_CONSTANTE_AE . "<br>"; // <-- nao funciona - constantes n podem ter o '$'

    const OUTRA_CONSTANTE_AE = 69;

    echo OUTRA_CONSTANTE_AE.'<br>';

    $var_aleatoria = 5;
    //const TERCEIRA_CONSTANTE = $var_aleatoria; <-- nao rola
    const TERCEIRA_CONSTANTE = 2 + 3;

    echo '<br>' . TERCEIRA_CONSTANTE;

    define('QUARTA_CONSTANTE', $var_aleatoria);
    echo '<br>' . QUARTA_CONSTANTE;
    
    echo '<br>';

    echo 'Linha no editor: ' . __LINE__ . "<br>"; // <-- constante do PHP
    echo 'Versao do PHP instalado na maquina: ' . PHP_VERSION . "<br>"; // <-- constante do PHP
    echo PHP_FLOAT_MAX . "<br>"; // <-- constante do PHP
    echo '<br>Path deste arquivo: ' . __FILE__ . "<br>"; // <-- constante do PHP
    echo '<br>Path do diretorio deste arquivo: ' . __DIR__ . "<br>"; // <-- constante do PHP

    //TERCEIRA_CONSTANTE = 5140; // <-- da erro
?>