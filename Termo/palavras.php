<?php 
    $palavras = ["termo", "sagaz", "amago", "negro", "exito", "mecan", "nobre", "algoz", 
    "afeto", "plena", "etica", "mutuo", "tenaz", "sutil", "vigor", "aquem", 
    "porem", "secao", "fazer", "audaz", "assim", "sanar", "atras", "ideia", 
    "velho", "natura", "crise", "sobre", "amigo", "verde", "graça", "corpo", 
    "tempo", "grupo", "justo", "festa", "causa", "claro", "gente", "lugar", 
    "ponto", "mundo", "valer", "Local", "plano", "texto", "linha", "gesto", 
    "frase", "geral", "banco", "leite", "noite", "porta", "campo", "forma", 
    "carta", "chuva", "vento", "fuego", "horas", "carro", "navio", "peixe"];

    $i_aleatorio = array_rand($palavras);
    $p_aleatoria = $palavras[$i_aleatorio];
    $p_aleatoria = str_split($p_aleatoria);

    session_start();
    $_SESSION['palavra'] = $p_aleatoria;

    header("Location: main_page.php")
?>