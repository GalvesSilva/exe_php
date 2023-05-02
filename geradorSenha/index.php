<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index_css.css">
    <title>Gerador de Senhas</title>
</head>
<body>
    <div class="container">
         
          <div class="box">
            <h2>Digite a quantidade de caracteres</h2>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
                    <input type="text" name="qtde" id="qtde" placeholder="Digite um número">
                    <button type="submit" id="btn-enviar">Gerar Senha</button>
                </form>
                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $array = [
                        ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
                        ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
                        [1, 2, 3, 4, 5, 6, 7, 8, 9, 0],
                        ['!', '@', '#', '%', '&', '*']
                    ];
                    
                    if(isset($_POST['qtde'])){
                        $qtde = $_POST['qtde'];
                        $senha = '';

                        if (empty($qtde)) {
                            echo "<h3>Input está vazio</h3>";
                        }else{
                            if($qtde > 128){
                                echo "<h3>Tamanho maxímo é 128</h3>";
                            }elseif($qtde < 8){
                                echo "<h3>Tamanho minímo é 8</h3>";
                            }
                            else{
                                for($i = 0; $i < $qtde;  $i++) {
                                    $subarray = $array[rand(0, count($array) - 1)];
                                    $valor = $subarray[rand(0,count($subarray) - 1)];
                            
                                    $senha .= $valor;
                            
                                }
                                echo '<p class="senha-gerada">'.$senha.'</p>';
                            }
                        }
                    }
                }
            ?>
          </div>

    </div>
</body>
</html>