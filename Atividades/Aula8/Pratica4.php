 <?php

    $salario1 = 1000;
    $salario2 = 2000;
    $salario2 = $salario1;
    $salario2++;
    $salario1 *= 1.1;

    echo "Valor Salário 1: $salario1 e Valor Salário 2: $salario2<br>";

    if ($salario1 > $salario2) {
        echo "O valor de salário 1 é maior que o salário 2";
    } else if ($salario2 > $salario1) {
            echo "O valor de salário 2 é maior que salário 1";
        } else {
            echo "Os valores são iguais";
        }

    for ($i = 0; $i <= 100; $i++) {
        $salario1++;
            if ($i == 49) {
                break;
            }
    }
    if ($salario1 < $salario2) {
        echo "<br>O valor de salário 1 é $salario1";
    }
?>