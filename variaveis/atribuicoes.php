<div class="titulo">Atribuições</div>

<?php
    $title = 'Atribuicoes';

    $numero = 10;

    echo '<br>' . $numero;
    
    $numero = $numero - 1;
    echo '<br>' . $numero;
    
    $numero = $numero + 1.8;
    echo '<br>' . $numero;
    
    $numero--;
    echo '<br>' . $numero;
    
    --$numero;
    echo '<br>' . $numero;
    
    $numero .= 4; // concatenação!!!
    echo '<br>' . $numero;
    
    $texto = 'kk eae men';
    echo '<br>' . $texto;
    
    $texto .= '!!';
    echo '<br>' . $texto;

    echo '<br>', var_dump(isset($texto));
    
    $cafe /*= "Tem cafe :D"*/;
    echo '<br>', var_dump(isset($cafe));
    
    $cafe2 = $cafe ?? 'Nao existe cafe :(';
    echo '<br>'. $cafe2;
?>