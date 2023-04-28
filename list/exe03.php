<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Frases apenas com espaços</h1>
    <?php
        $input = 'Estou praticando exercícios';
        $words = explode(" ",$input);
        $last_word = $words[sizeof($words) - 1];
        $size = mb_strlen($last_word);
        print($size);
    ?>
    <h1>Frases com vírgulas</h1>
    <?php
        $input = 'Estou praticando exercícios,';
        $input = str_replace(",", "",$input);
        $words = explode(" ",$input);
        $last_word = $words[sizeof($words) - 1];
        $size = mb_strlen($last_word);
        print($size);
    ?>
</body>
</html>