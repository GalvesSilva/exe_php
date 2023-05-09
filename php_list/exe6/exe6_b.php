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
        function mask_array($array) {
            if (empty($array)) {
                echo "Input is empty";
            }else{
                if(strlen($array) < 6){
                    print("\n".$array);
                }else{
                    for($i=1;$i < strlen($array)-4;$i++){
                        if(ctype_digit($array[$i]))
                        $array[$i] = "x";
                    }
                    print("\n".$array);
                }
            }
        }
        
        $array = "2377837829-8";     
        mask_array($array);
    ?>
</body>
</html>