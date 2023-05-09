<?php 
    if(isset($_POST['submit'])){
        $array = $_POST['fnumber'];

        if (empty($array)) {
            header("Location: exe6.php");
            echo "
            <form method='post' action='card_number.php' >
            Card: <input type='number' name='fnumber' >
            <input type='submit' name='submit'>
            </form>
            <h4>Input is empty</h4>";
        } else {
            if(strlen($array) < 6){
                echo "<form method='post' action='card_number.php' >
                Card: <input type='number' name='fnumber' value=".$array." >
                <input type='submit' name='submit'>
                </form>";
            }else{
                for($i=1;$i < strlen($array)-4;$i++){
                    $array[$i] = "x";
                }
                echo "<form method='post' action='card_number.php' >
                Card: <input type='number' name='fnumber' value=".$array." >
                <input type='submit' name='submit'>
                </form>";
            }
        }
    }

?>