<?php 

    $disciplina = array(array("Matemática",5,8.5),array("Português",2,9),array("Geografia",10,6),array("Educação Física",2,8));
    
    echo "<table><thead><tr><th>Disciplina</th><th>Faltas</th><th>Média</th></tr></thead><tbody>";
    foreach ($disciplina as $valor1) {
        echo "<tr>";
        foreach ($valor1 as $valor2) {
            echo "<td>$valor2</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
?>