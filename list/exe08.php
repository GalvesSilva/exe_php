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
        function find_Sum(&$array, $goal, $index = 0, $result = []) {
            if($index == count($array)){
                return $result;
            }

            $x = ($array[$index] * - 1) + $goal;

            if(in_array($x,$array) && !in_array($x,$result) && !array_key_exists($x, $result)){
                $result[$array[$index]] = $x;
            }else {
                unset($array[$index]);
            }

            $index += 1;
            return find_Sum($array, $goal, $index, $result);
        };

        function expressions_print(&$item,$key) {
            print("<br>(".$key.") + (".$item.") = 6");
        } 
        
       $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);
       $goal = 6;

      
        $result_array = find_Sum($array,$goal);

        array_walk($result_array, 'expressions_print');   
    ?> 
    <h3>Com funções</h3>
    <?php  
        function teste(&$item, $key) {

           print("<br> ( ".$item." ) + ( ".$key." ) = 6");
            
          };
            
        $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);
             
        $number_needing = array_map( function ($n) {
            
            return ($n * - 1 ) + 6;
            
        },$array);
            
        $result = array_combine( $array, $number_needing);
            
        $result_array = array_intersect($result, $array);
             
         array_walk($result_array, 'teste');
    ?> 
    <h3>Com For</h3>
    <?php    
        $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);
        $result = [];

        foreach($array as $key => $value){
            $x = ($value * - 1) + 6;
            if(in_array($x,$array) && !in_array($x,$result) && !array_key_exists($x, $result)){
                $result[$value] = $x;
            }else {
                unset($array[$key]);
            }
        }

        foreach($result as $key => $value){
            print("<br> ( ".$value." ) + ( ".$key." ) = 6");
        }
    ?> 
</body>
</html>