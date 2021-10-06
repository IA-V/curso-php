<div class="titulo">Desafio Estruturas de Controle</div>

<?php
    $pi = 3.14;
    var_dump(pi());

    $diferenca = pi() - $pi;
    echo "<br>$diferenca";

    if($diferenca <= 0.0016) {
        echo '<br>"Iguais"';
    } else {
        echo '<br>Diferentes';        
    }
?>