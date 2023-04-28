<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<p, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $array = array(5, 3, 1, 15);
        $reversed = array();
        for( $i = sizeof($array) - 1 ; $i >= 0 ; $i--){
            array_push($reversed, $array[$i]);
        }
        print("<h4>input:</h4>");
        print_r($array);
        print("<br>");
        print("<h4>output:</h4>");
        print_r($reversed);
    ?>
</body>
</html>