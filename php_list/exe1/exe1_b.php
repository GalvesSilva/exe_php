<?php 
    $array = [0,2,3,4,6,7,10];
        foreach($array as $key => $a){
            if($a == 0){
                unset($array[$key]);
                array_push($array, 0);
            }
        }
    echo "<h1>Exercício 1 com foreach</h1>";
    echo '<pre>'.print_r($array, true).'</pre>';
?>