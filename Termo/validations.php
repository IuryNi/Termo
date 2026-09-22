<?php
    session_start();
    $palavra = $_SESSION['palavra'];
    $input = $_POST['txt_input'];

    if($input == $palavra){
        $_SESSION['win'] = true;
    }
    
    for($i=0;$i<5;$i++){
        if($input[$i] == $palavra[$i]){
            $_SESSION['bdcolors'][$i] = "#7ceb2d";
        }elseif(in_array($input[$i],$palavra)){
            $_SESSION['bdcolors'][$i] = "#ebeb2d";
        }else{
            $_SESSION['bdcolors'][$i] = "#ca3611";
        }
    }

    $_SESSION['format'][] = $input;

    header("Location: main_page.php");
?>