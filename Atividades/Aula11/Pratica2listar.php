<?php

    function conectaBd() {
        $dbconn = pg_connect("host=localhost 
                            port=5432
                            dbname=postgres
                            user=postgres
                            password=postgres");
        return $dbconn;
    }
 
    function gerarTabela($dados) {
        echo "<table border='1px'><tr>";
        foreach ($dados as $value) {
            echo '<td>'. $value. '</td>';
        }
        echo "</tr></table";
    }

    try {
        $dbconn = conectaBd();
        if ($dbconn) {
            $pesquisa = array("%" . $_POST['campo_pesquisa'] . "%");
            $result = pg_query_params($dbconn, "SELECT * FROM TBPESSOA WHERE PESNOME ILIKE $1",$pesquisa);
            if (pg_num_rows($result) > 0) {
                while ($pessoa = pg_fetch_assoc($result)) {
                    gerarTabela($pessoa);
                }
            }   else {
                    echo "Nada encontrado.";
                }
            }
        } catch (Exception $e){
        echo $e->getMessage();
    }

    echo "<a href='/ProgramacaoWeb2024/Atividades/Aula11/Pratica2.html'>Voltar ao Inicio</a>";

    ?>