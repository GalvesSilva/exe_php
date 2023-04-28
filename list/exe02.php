<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Com foreach</h1>
    <?php
        function find_number($array) {
            $array2 = array_count_values($array);
            $max = 0;
            $vezes = 0;
            foreach ($array2 as $key => $value) {
                if($value > $vezes){
                    $vezes = $value;
                    $max = $key;
                }
            }

            return $max;
        }
        $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
        print_r(find_number($array));
    ?>
    <h1>Apenas funções do PHP</h1>

    <?php
        $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
        $result = array_count_values($array);
        asort($result);
        print_r(array_key_last($result));
    ?>
    
    <h1>Apenas funções do PHP</h1>
    <?php
        $array = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
        $result = array_count_values($array);
        print_r(array_search(max($result),$result));
    ?>
</body>
</html>