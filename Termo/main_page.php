<?php 
    session_start();

    if(isset($_POST['reset'])){
        header("Location: palavras.php");
        session_destroy();
    }

    if(isset($_SESSION['win'])){
        if($_SESSION['win']){
            echo "<script>alert('🎉 Parabéns! Você acertou a palavra secreta!');</script>";
        }
    }

    if(isset($_SESSION['format'])){
        for($i=0;$i<5;$i++){
            $index = count($_SESSION['format']) - 1;
            $_SESSION['format'][$index][] = $_SESSION['bdcolors'][$i];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="termo_style.css">
</head>
<body>
    <h1>Treco</h1>
    <?php 
        //print_r($_POST);
        //echo "<pre>";print_r($_SESSION); echo "</pre>";
        if(isset($_SESSION['format'])){
            for($j = 0;$j < count($_SESSION['format']);$j++){
                $word = $_SESSION['format'][$j];
                echo "<p>";
                for ($i = 0; $i < 5; $i++) {
                    $letra = $word[$i];
                    $index = count($_SESSION['format']) - 1;
                    $cor_borda = $_SESSION['format'][$j][$i + 5];
                    echo "<input class='input' type='text' value='{$letra}' readonly style='border-color: {$cor_borda};'>";
                }
                echo "</p>";
            }
        }
    ?>
    <p>
        <form method="post" action="validations.php">
            <input class="input" type="text" name="txt_input[]" maxlength="1">
            <input class="input" type="text" name="txt_input[]" maxlength="1">
            <input class="input" type="text" name="txt_input[]" maxlength="1">
            <input class="input" type="text" name="txt_input[]" maxlength="1">
            <input class="input" type="text" name="txt_input[]" maxlength="1">
            <input type="submit" value="Enviar">
        </form>
    </p>
    <form action="" method="post">
        <input type="submit" name="reset" value="resetar">
    </form>
</body>
</html>