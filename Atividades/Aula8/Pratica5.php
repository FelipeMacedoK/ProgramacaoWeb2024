<?php 
    /*$carros = array ("Volvo", "BMW", "Toyota");
    echo "Eu gosto de " . $carros[0] . ", " . $carros[1] . " and " . $carros[2] . ".<br>";
    print_r ($carros);

    $idade = array ("João"=>"35", "Maria"=>"37", "José"=>"43");
    foreach ($idade as $chave => $valor) {
        echo "Chave=" . $chave . ", Valor=" . $valor . "<br>";
    }
    */

    $disciplina = array ("Banco de Dados II","Estrutura de Dados II","Administração de Sistemas","Engenharia de Software II","Programação Web I");
    $professores = array ("Marco Aurélio Butzke","Fernando Bastos","Sandro Alencar","Jullian Hermann Creutzberg","Cleber Nardelli");

    for ($i=0; $i < 5; $i++) {
        echo $i . " - Disciplina " . $disciplina[$i] . ", professor " . $professores[$i] . ".<br>";
    }

?>