<?php 
        $array = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
        $array2 = array_count_values($array);
        $odd = 0;
        foreach ($array2 as $key => $value) {
            if($value % 2 !== 0){
                $odd = $key;
            }
        }
        echo '<pre>'.print_r($array, true).'</pre>';
        print_r($odd);
?>