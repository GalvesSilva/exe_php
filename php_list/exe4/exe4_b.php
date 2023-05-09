<?php
    $array = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
    $result = array_count_values($array);
    $odd =  array_filter($result, function ($item) {
        return $item % 2 != 0;
    });
    print_r(key($odd));
?>