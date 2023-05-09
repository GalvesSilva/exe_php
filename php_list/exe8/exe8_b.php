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