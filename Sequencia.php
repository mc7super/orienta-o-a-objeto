<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência</title>
</head>
<body>
    <?php
        if(isset($_POST["botao"])){
            include_once("Sequencia.class.php");
            $sequencia = new Sequencia();
            $sequencia->setInicio($_POST["inicio"]);
            $sequencia_>setFim($_POST["fim"]);
            if($_POST["mostrar"] == "pares")
                $sequencia->exibirTodosNumeros();
            elseif($_POST["mostrar"] == "impares")
                $sequencia->exibirImpares();
            }
            else{
    ?>
    <form action="sequencia.php" method="post">
        Selecione o valor incial:
        <select name="inicio">
        <option value="1" selected>1</option>;
        <?php
            for($i = 2; $i <= 99; $i++){
                echo '<option value="'.$i.'">'.$i.'</option>';
            }
        ?>
            
        <opition value="100" selected>100</option>;
        </select>
    Mostra:<br>
        <imput type="radio" name="mostrar" value="todos" checked>
    Todos<br>
        <imput type="radio" name="mostrar" value="pares"> Apenas os
    pares<br>
        <imput type="radio" name="mostrar" value="impares"> Apenas os
    ímpares<br>
        <input type="submit" name="botao" value="Enviar">
        </form>
        <?php
            }
        ?>
    </body>
</html>