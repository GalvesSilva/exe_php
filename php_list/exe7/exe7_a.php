<?php 
    $array = array(5, 3, 1, 15);
    $reversed = array();
    for( $i = sizeof($array) - 1; $i >= 0 ; $i--){
        array_push($reversed, $array[$i]);
    }
    print("<h4>input:</h4>");
    print_r($array);
    print("<h4>output:</h4>");
    print_r($reversed);
?>