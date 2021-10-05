<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE . '<br>';
    echo FALSE . '<br>';

    echo var_dump(true) . "<br>";
    echo var_dump(FaLsE) . "<br>";
    echo var_dump('true') . "<br>";

    echo is_bool('true');
    echo is_bool(false) . "<br>";
    echo is_bool(0) . "<br>";

    echo is_bool((bool)0) . "<br>";
    echo is_bool((bool)1) . "<br>";

    echo var_dump((bool)0b1);
    echo var_dump((bool)01);
    echo var_dump((bool)-1);
    echo var_dump((bool)0);
    echo var_dump((bool)22);
    echo var_dump((bool)0x16);
    echo var_dump((bool)0x0) . "<br><br>";
    
    echo var_dump((bool)"0");
    echo var_dump((bool)"") . "<br><br>"; // Ambos retornam FALSE, mas todo o resto retorna TRUE
    
    echo var_dump((bool)"00");
    echo var_dump((bool)"false");
    echo var_dump((bool)"true");

    echo "<br><br>";

    echo var_dump(!!"carampolas"); // <-- Outra forma de converter pra boolean
    echo var_dump(!!"0");
    echo var_dump(!!0);
?>