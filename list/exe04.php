<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=php, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>foreach</h1>
    <?php 
        $array = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
        $array2 = array_count_values($array);
        $odd = 0;
        foreach ($array2 as $key => $value) {
            if($value % 2 !== 0){
                $odd = $key;
            }
        }
        print_r( $odd);
    ?>
    <h1>filter</h1>
    <?php
        $array = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
        $result = array_count_values($array);
        $odd =  array_filter($result, function ($item) {
            return $item % 2 != 0;
        });
        print_r(key($odd));
    ?>
</body>
</html>