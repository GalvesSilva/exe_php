<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
    Card: <input type="number" name="fnumber" >
    <input type="submit">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $array = $_POST['fnumber'];

        if (empty($array)) {
            echo "<h4>Input is empty</h4>";
        } else {
            if(strlen($array) < 6){
                echo "<h4>".$array."</h4>";
            }else{
                for($i=1;$i < strlen($array)-4;$i++){
                    $array[$i] = "x";
                }
                echo "<h4>".$array."</h4>"; 
            }
        }

        }
    ?>
</body>
</html>