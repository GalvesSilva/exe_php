<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Verifica Palavras</h1>
    <?php 
        $word = 'osso';
        $reverse_word = strrev($word);
        print($word == $reverse_word);
    ?>
    <h1>Verifica Palavra e Chaves</h1>
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
</body>
</html>