<?php
        $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
        $result = array_count_values($array);
        asort($result);
        echo "<h1>Exercício 2</h1>";
        echo "<p>usando as funções array_count_values, asort e array_key_last do php </p>";
        print_r(array_key_last($result));
?>