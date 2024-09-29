<?php

/*
2. Crie um programa para testar se um número é divisível por 2.
Caso for verdade escrever a frase “Valor divisível por 2”
Caso for falso escrever a frase “O valor não é divisível por 2”
*/

$valor = 5;

function exibeMensagem($mensagem) {
    echo $mensagem;
}

function verificarDivisao($valor) {
    if ($valor % 2 == 0) {
        return exibeMensagem("Valor divisível por 2");
    }
    else {
        return exibeMensagem("O valor não é divisível por 2");
    }
}

verificarDivisao($valor);

?>