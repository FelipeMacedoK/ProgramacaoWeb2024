<?php
    try {
        $dbconn = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
        if ($dbconn) {
            echo "database conectado...";
            $result = pg_query($dbconn, "SELECT COUNT(*) AS QTDTABS FROM PG_TABLES");
            while ($row = pg_fetch_assoc($result)) {
                echo "<br>Result: ".$row['qtdtabs'];
            }
        }
    } catch (Exception $e){
        echo $e->getMessage();
    }