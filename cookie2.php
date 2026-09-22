<?php
    $N_cor = $_POST['setcolor']; // pega setcolor do post e tranforma em cookie
    setcookie('cor', $N_cor, time() + 300);

    $block = $_POST['bloco']; // pega o bloco de post e tranforma em cookie
    setcookie('bloco', $block, time() + 300);

    header("Location: cookie.php"); // retorna para a pagina principal
?>