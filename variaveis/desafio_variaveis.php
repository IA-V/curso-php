<div class="titulo">Desafio de Variáveis</div>

<?php
    $parte_1_numerador = (6*(3+2))**2;
    $parte_1_denominador = 3*2;
    $parte_2_numerador = ((1-5)*(2-7));
    $denominador_geral = 10**3;

    $resultado = ( ((($parte_1_numerador)/$parte_1_denominador) -
                            ($parte_2_numerador/2)**2 )**3)/$denominador_geral;

    echo $resultado;
?>