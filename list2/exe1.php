<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [0,2,0,0,-1,23,4,6,0,0,0,0,7,10];
        $zero_array = array_filter($array, function($d) { return $d == '0'; });
        $result_array = array_merge(array_filter($array),$zero_array);
        print_r($result_array);
    ?>
    <h2>Teste 2</h2>
    <?php 
        $array = [0,2,0,0,-1,23,4,6,0,0,0,0,7,10];
        foreach($array as $key => $a){
            if($a == 0){
                unset($array[$key]);
                array_push($array, 0);
            }
        }
        print_r($array);
    ?>
    <h2>Teste 3</h2>
    
</body>
</html>