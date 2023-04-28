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
        class A{
            public function sortArray():string{
            return "Class A method";
            }
        }
        
        class B extends A{
            function sortArray():string{
            return "Class B method";
            }
        }
        
        $b=new B();
        
        echo $b->sortArray();
    ?>
</body>
</html>