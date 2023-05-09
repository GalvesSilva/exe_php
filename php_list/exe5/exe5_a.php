<?php 
        function palindrome($word) {
           $reverse_word = strrev($word);

           if($word === $reverse_word){
                return true;
           }
           return false;
        }

        $word = 'arara';
        print(palindrome($word));
?>