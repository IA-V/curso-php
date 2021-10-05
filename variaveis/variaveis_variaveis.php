<div class="titulo">Variáveis Variáveis</div>

<?php
    $a = 'ValorA';
    $$a = 'ValorAA';

    echo "variavel \$a == $a";
    print '<br>';
    echo "variavel \$\$a == $$a"; // <-- ERRADO!!
    print '<br>';
    echo "variavel \$\$a == {$$a}"; // <-- CERTO!!
    
    /* O que ocorre eh que, quando se usa $'identificador_outra_variavel', uma nova variavel
    ** cujo nome eh o conteudo da variavel 'identificador_outra_varivel' eh criada!!!
    ** Assim: $$a == $ValorA!!! <-- se usarmos uma variavel de nome $ValorA, ela exibira o conteudo de $aa!!!
    ** Observe:
    */
    
    print '<br>';
    echo "variavel \$\$a == ${$a}"; /* <-- CERTO - O conteudo de $a eh substituido na string, gerando o nome
                                    ** de variavel '$ValorA', que eh, entao, interpolada nessa string!!
                                    ** Isto eh: "${$a} == $ValorA"!!!!!!
                                    */
    print '<br>';
    echo $ValorA;

    // Eh possivel encadear essa operacao nas variaveis! Olha so:

    $interjeicao1 = "catapimbas";
    $$interjeicao1 = "carampolas";
    $$$interjeicao1 = "cacetada!!!";

    print "<br>$interjeicao1,<br> $catapimbas,<br> $carampolas<br>"; /* <-- Tambem pode ser 'printado' com
                                                                     ** $interjeicao1, $$interjeicao1 e
                                                                     ** $$$interjeicao1, respectivamente,
                                                                     ** ou ainda, da seguinte forma:
                                                                     */
    $interjeicao2 = "outro_nome";
    $outro_nome = "kk";
    $kk = "KKKKKKKKKKKK";
    print "<br>$interjeicao2 ${$interjeicao2} ${$$interjeicao2}";
?>