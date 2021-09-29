<div class="titulo">Strings</div>

<?php
    echo 'Uma string comum <br>';
    var_dump('outra string comum');

    //concatenacao

    echo '<br> Uma string comum' . ", mas agora concatenada <br>";
    echo '<br> "testando" o \'teste\', ' . "concatenado 'teste' e mais \"testes\" kk <br>";

    print("<br>KK FUNCAO PRINT kkkk");
    print "<br>KK FUNCAO PRINT sem parenteses kkk";
    print('<br>KK FUNCAO PRINT com parenteses, mas com aspas simples kkk');
    print '<br>KK FUNCAO PRINT sem parenteses, mas com aspas simples kkk <br><br>';

    //algumas funcoes pra manipular strings

    print strtoupper("minusculo maximizado (funciona com \"print\" ou com \"echo\") <br>");
    print strtolower("MAIUSCULO MINIMIZADO (funciona com \"print\" ou com \"echo\") <br>");

    print strtolower("<br>MAIUSCULO MINIMIZADO " . strtoupper("(funciona com \"print\" ou com
     \"echo\") <- isso q ta entre parenteses ta dentro de uma funcao strtoupper q foi concatenada kk<br>"));

    print(ucfirst("<br>so a primeira letra em maiusculo!! <- funcao \"ucfirst\" dentro de um \"print\"<br>"));

    print(ucwords("<br> so a primeira letra de todas as palavras em maiusculo!!<br>"));

    print('<br> "strlen" igual em C kk ');
    print('<- qtd de caracteres = '.strlen('"strlen" igual em C kk').', mas só o strlen conta
     os caracteres especiais tbm, como acento, cedilha, etc. <br>');
    
    printf('É necessário usar "mb_strlen()" pra n contar os caracteres especiais <- '.mb_strlen('É necessário usar "mb_strlen()" pra n contar os caracteres especiais').'<br>');

    echo '<br> Parte dessa string aqui -> ' . substr("<br> Parte dessa string aqui -> ", 11, 5);
    echo '<br> Parte dessa string aqui ate o final -> ' . substr("<br> Parte dessa string aqui ate o final -> ", 11);

    print str_replace('cafe 1', 'cafe 2', '<br> cafe 1 eh bom aha');
?>