<?php

    $pastas = array ("bsn" => array("3a fase" => array("")))

    function criaArvore ($aPasta, $nivel = 1) {
        foreach ($aPasta as $chave => $valor) {
            
            if(is_array($valor)) {
                echo str_repeat(" - ", $nivel) . " " . $chave
                criaArvore($valor, $nivel + 1);
            } else {
                echo str_repeat(" - ")
            }
            }
        }
    }


    criaArvore ($pastas);

?>