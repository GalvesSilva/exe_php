<?php
    echo "<h1>Exercício 2</h1>";
    echo "<p>usando as funções array_count_values, array_search e max do php </p>";
    $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
    $result = array_count_values($array);
    print_r(array_search(max($result),$result));
?>