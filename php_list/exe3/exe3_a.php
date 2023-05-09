<?php
    echo "<h1>Exercício 3</h1>";
    $input = '“Estou praticando exercícios';
    $words = explode(" ",$input);
    $last_word = $words[sizeof($words) - 1];
    $size = mb_strlen($last_word);
    print($size);
?>