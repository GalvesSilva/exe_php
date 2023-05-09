<h3>Com Foreach</h3>
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