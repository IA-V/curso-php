<div class="titulo">Interpolação</div>

<?php
    $numero = 10;
    echo '<br> $numero'; // <-- aspas simples nao processam o valor da variavel dentro da string literal!!!
    echo "<br> $numero"; // <-- aspas duplas processam o valor da variavel dentro da string literal!!!

    echo "<br> $numero + 1"; /* <-- apenas "concatena" o '+ 1' ao valor da variavel,
                             ** nao ha operacao matematica!!!
                             */
    $objeto = "caneta";
    echo "<br> 5 $objeto s"; /* <-- se o 's' ficar junto do nome da variavel, ele sera considerado como
                             ** parte do identificador
                             */
    echo "<br> 5 {$objeto}s"; /* <-- correcao */
    // OU
    echo "<br> 5 ".$objeto."s";

    echo "<br> Eu tinha 5 { $objeto}s, mas perdi 3 {$objeto }s";
?>