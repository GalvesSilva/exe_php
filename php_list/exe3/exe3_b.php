<?php
        function remove_caracteres($string) {

            $char = array(' & ', 'ª ', '  (', ') ', '(', ')', ' / ', ' /', '/ ', '/', ' | ', ' |', '| ', ' | ', '|', '_', '.', '!', '?', ' ,', ' °',':');
            $string = str_replace( $char, "", $string);

            return $string;
        }  

        function count_letters($string) {

            $string = remove_caracteres($string);
    
            $words = explode(" ",$string);
            $last_word = $words[sizeof($words) - 1];
            $size = mb_strlen($last_word);

            return $size;
        }

        $string = "Estou praticando exercícios!";

        print("Input: ".$string);
        print("<br>");
        print("Output: ".count_letters($string));
    ?>