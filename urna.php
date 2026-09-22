<?php 
    session_start();

    if (!isset($_SESSION['lista_cliques'])) {
        $_SESSION['lista_cliques'] = [];
    }

    if (isset($_POST['btnurna'])) {
        $_SESSION['lista_cliques'][] = $_POST['btnurna'];
    }

    if (isset($_POST['limpar'])) {
        $_SESSION['lista_cliques'] = [];
    }

    if(isset($_POST['subenviar'])){
        if($_POST['subenviar'] == "enviar"){
             $_SESSION['lista_cliques'] = [];
        }
    }

    $lista = "";
    for($i = 0; $i < count($_SESSION['lista_cliques']); $i++){
        $lista = $lista . $_SESSION['lista_cliques'][$i];
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urna Eletrônica</title>
    <link rel="stylesheet" href="urna_+style.css">
</head>
<body>

    <div class="urna">
        <div class="tela-container">
            <div class="topo-tela">
                <p class="tela-topo">Seu voto vai para</p>
                <p class="tela-cargo">Candidato</p>
            </div>

            <?php
                echo "<form method='post'>";
                    echo "<input type='text' class='urna-input-numero' name='numcandidato' value='$lista' readonly>";
                    
                    echo "<div class='teclado-acoes' style='margin-top: 40px;'>";
                        echo "<input type='submit' class='btn-acao btn-confirma' value='enviar' name='subenviar'>";
                    echo "</div>";
                echo "</form>";
            ?>
        </div>

        <div class="teclado-container">
            <form method="post" style="width: 100%; height: 100%; display: flex; flex-direction: column;">
                
                <div class="teclado-numerico">
                    <input type="submit" class="btn-num" value="1" name="btnurna">
                    <input type="submit" class="btn-num" value="2" name="btnurna">
                    <input type="submit" class="btn-num" value="3" name="btnurna">
                    <input type="submit" class="btn-num" value="4" name="btnurna">
                    <input type="submit" class="btn-num" value="5" name="btnurna">
                    <input type="submit" class="btn-num" value="6" name="btnurna">
                    <input type="submit" class="btn-num" value="7" name="btnurna">
                    <input type="submit" class="btn-num" value="8" name="btnurna">
                    <input type="submit" class="btn-num" value="9" name="btnurna">
                    <input type="submit" class="btn-num linha-zero" value="0" name="btnurna">
                </div>

                <div class="teclado-acoes">
                    <button type="button" class="btn-acao btn-branco">Branco</button>
                    <input type="submit" class="btn-acao btn-corrige" value="limpar" name="limpar">
                </div>

            </form>
        </div>

    </div>

</body>
</html>
