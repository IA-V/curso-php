<div class="titulo">Conversões de Tipos</div>

<?php
    echo is_int(PHP_INT_MAX) . "<br>";
    
    var_dump(PHP_INT_MAX + 1);
    echo "<br>";

    var_dump(1.0 + 1);
    echo "<br>";

    var_dump((float)5);
    var_dump((int)5.5); //Informação perdida!!!
    var_dump(5.5);

    echo "<br>".intval('A', 16);
    echo "<br>".intval(16, 16);

    echo "<br>";
    var_dump((int) round(3,3));
    var_dump(round(3,3));
    
    echo "<br>";
    var_dump(5 + '1');
    var_dump(7 + "3");
    var_dump(7 . "3");
    
    echo "<br>";
    var_dump(7 . "-3 kk");
    echo "<br>";
    var_dump(7 + "-3 kk");
    echo "<br>";
    /*var_dump(7 + "kk"); /* O erro que ocorre aqui impede que a linha abaixo seja lida --> Troque a
                                    posicao para testar :)
                          */
    echo "<br>";
    var_dump(3 + "2+5");
    
    echo "<br>";
    var_dump((int)"10.5 kk");

    echo "<br>";
    var_dump((int)1.5 + "5.2e2");
    echo "<br>";
    var_dump((float)1.5 + "5.2e2");
    
    echo "<br>";
    var_dump((int)1 + "5.2e2");
    
    var_dump(7 + "bilu3 kk"); /* O erro que ocorre aqui impede que a linha abaixo seja lida --> Troque a
                                    posicao para testar :)
                                */
    var_dump(7 + "3bilu3 kk");
?>