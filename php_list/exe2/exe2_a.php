<?php
    function find_number($array) {
         $array2 = array_count_values($array);
        $max = 0;
        $vezes = 0;
        foreach ($array2 as $key => $value) {
            if($value > $vezes){
                $vezes = $value;
                $max = $key;
            }
        }

        return $max;
    }
    $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
    echo "<h1>Exercício 2</h1>";
    print_r(find_number($array));
?>