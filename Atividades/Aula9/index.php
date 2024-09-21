<?php
/*
function metroQuadrado(int $lado1 = 1, int $lado2 = 1) {
    echo "Total M²: " . ($lado1 * $lado2);
}

metroQuadrado(5);


function metroQuadrado(int $lado1 = 1, int $lado2 = 1) {
    return $lado1 * $lado2;
}

function exibeMensagem($mensagem) {
    echo $mensagem;
}

exibeMensagem("Total M²: " . metroQuadrado(10,10))
*/

require_once("functions.php");

//Declarar arrays de dados como variáveis de escopo global
define("notas", array(6, 8, 10, 7));
define("aulas", array(0, 1, 0, 0, 1, 0, 0, 1, 0, 0));

$mediaNotas = calculaMediaNotas();
$frequencia = calculaFrequencia();

exibeMensagem("Média de Notas: " . $mediaNotas . "<br>" .
              "Status Nota: " . verificaStatusNotas($mediaNotas) . "<br>" . 
              "Frequencia: " . $frequencia . "<br>" .
              "Status Frequencia: " . verificaStatusFrequencia($frequencia) . "<br>");

?>