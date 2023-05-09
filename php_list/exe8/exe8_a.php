
    <?php  
        echo "<h3>Resolvendo com Função Recursiva</h3>";
        function find_Sum(&$array, $index = 0, $result = []) {
            if($index == count($array)){
                return $result;
            }

            $x = ($array[$index] * - 1) + 6;

            if(in_array($x, $array) && !in_array($x, $result) && !array_key_exists($x, $result)){
                $result[$array[$index]] = $x;
            }

            $index ++;

            return find_Sum($array, $index, $result);
        };

        function printing_equation($item,$key) {
            print("<br>(".$key.") + (".$item.") = 6");
        } 
        
       $array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);

       $result_array = find_Sum($array);

        array_walk($result_array, 'printing_equation');   
    ?> 