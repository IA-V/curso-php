<div class="titulo">Valor X Referencia</div>

<?php
    $var = 'valor inicial';
    $var2 = $var; //valor

    $var_passada_referencia = "kapakapa";
    $var_recebe_referencia = &$var_passada_referencia;

    echo "$var_passada_referencia<br>";
    
    $var_recebe_referencia = " quero cafe"; /* <-- nao precisa colocar '*' antes do nome da variavel pra indicar
                                            ** que se quer mudar o valor q esta naquele endereco, como em C
                                            */
    echo "$var_passada_referencia<br>";
?>