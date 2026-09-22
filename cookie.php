<?php
   // valida se o cookie cor existe
    if(!isset($_COOKIE['cor'])){
        setcookie("cor", "#ffffff", time() + 300); // se não cria e atribui o branco
    }else{
        $cor = $_COOKIE['cor']; // se existir pega a cor e coloca na variavel
    }

    if(isset($_COOKIE['b1color'])){ // se existir o cookie b1color
        $b1color = $_COOKIE['b1color']; // atribui a cor a minha variavel
        }else{
            $b1color = "#ffffff"; // se não inicia como branco
            }
    if(isset($_COOKIE['b2color'])){ // mesma coisa do b1color acima
        $b2color = $_COOKIE['b2color'];
        }else{
            $b2color = "#ffffff";
            }

    if(isset($_COOKIE['bloco']) and isset($_COOKIE['cor'])){ // se o bloco foi seleciona e a cor tambem troca o valor da variavel correspondente
        if($_COOKIE['bloco'] == "b1"){
            $b1color = $cor;
        }else{
            $b2color = $cor;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cookie2.php" method="post">
        <h1>Selecione uma Cor</h1>
        <p><input type="color" name="setcolor" value="<?php echo $cor; ?>"></p>
        <h1>Qual bloco pintar?</h1>
        <p><input type="radio" name="bloco" value="b1">Primeiro Bloco 
        <input type="radio" name="bloco" value="b2">Segundo Bloco</p>
        <p><input type="submit" value="Aplicar"></p>
    </form>
    <div style="border: solid; padding: 10px; margin: 10px; background-color: <?php echo $b1color;?>;">
        Primeiro Bloco
    </div>
    <div style="border: solid; padding: 10px; margin: 10px; background-color: <?php echo $b2color;?>;">
        Segundo Bloco
    </div>
    <?php
        setcookie("b1color", $b1color, time() + 300); //armazena a cor da variavel no cookie para não perder
        setcookie("b2color", $b2color, time() + 300);
    ?>
</body>
</html>