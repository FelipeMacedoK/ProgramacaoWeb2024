<?php

    function getValor() {
        try {
            if (isset($_REQUEST["valor"])) {
                if(is_numeric($_REQUEST["valor"])) {
                    return $_REQUEST["valor"];
                }
            }
            return 0;
        } catch (\Throwable $e) {
            return 0;
        }
    }

    function getDesconto() {
        try {
            if (isset($_REQUEST["desconto"])) {
                if(is_numeric($_REQUEST["desconto"])) {
                    return $_REQUEST["desconto"];
                }
            }
            return 0;
        } catch (\Throwable $e) {
            return 0;
        }
    }

    function calcularValor() {
        return getValor() - getDesconto();
    }

    function exibeMensagem($mensagem) {
        echo $mensagem;
    }

    exibeMensagem("O valor após o calculo é " . calcularValor());

?>