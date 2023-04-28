<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Teste 1</h1>
        <?php 
            $array = [0,2,3,4,6,7,10];
            for($i = 0; $i < sizeof($array); $i++){
                for($j =$i + 1; $j < sizeof($array); $j++){
                    if($array[$i] == 0){
                        $aux = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $aux;
                    }
                }
            }
            print("<br/>");
            print_r($array);
        ?>
        <h1>Teste 3</h1>
        <?php
            $array = [0,2,2,4,6,7,10];
            $with_zero = sizeof($array);
            $array = array_filter($array);
            $without_zero = sizeof($array);
            $n = $with_zero - $without_zero;
            for($i=0;$i < $n ;$i++){
                array_push($array, 0);
            }
            print_r($array);
        ?>


</body>
</html>
