<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Resolvendo com Função Recursiva</h3>
    <?php  
        function find_Sum(&$array, $index = 0, $result = []) {
            if($index == count($array)){
                return $result;
            }

            $x = ($array[$index] * - 1) + 6;

            if(in_array($x, $array) && !in_array($x, $result) && !array_key_exists($x, $result)){
                $result[$array[$index]] = $x;
            }else {
                unset($array[$index]);
            }

            $index += 1;

            return find_Sum($array, $index, $result);
        };

        function priting_equation($item,$key) {
            print("<br>(".$key.") + (".$item.") = 6");
        } 
        
       $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);

       $result_array = find_Sum($array,$goal);

        array_walk($result_array, 'priting_equation');   
    ?> 
</body>
</html>