<?php
    $array = [0,2,3,4,6,7,10];
    $zero_array = array_filter($array, function($d) { return $d == '0'; });
    $result_array = array_merge(array_filter($array),$zero_array);
    echo "<h1>Exercício 1 com filter e merge</h1>";
    print_r($array);
    echo '<pre>Output: '.print_r($result_array, true).'</pre>';
?>