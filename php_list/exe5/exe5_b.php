<?php 
        $word = 'Socorram-me, subi no ônibus em Marrocos!';

        $word = iconv('UTF-8', 'ASCII//TRANSLIT',$word);

        $words_array = str_split($word);

        $words_array = array_filter($words_array, function($item) {
            return ctype_alnum($item);
        });
        
        $result_word = implode($words_array);
        $result_word =  strtolower($result_word);

        $reverse_word = strrev($result_word);
      
        print($result_word == $reverse_word);
?>