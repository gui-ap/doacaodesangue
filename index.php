<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DoaçãodeSangue</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $idade = $_POST["idade"];
    $peso = $_POST["peso"];

    $resultado = calculoSangue($idade, $peso);

    function calculoSangue($idade, $peso)
    {

        if ($idade < 18 && $peso < 50) {
            $resultado = "Inapta para doar sangue";
        } 
        else if ($idade > 69 && $peso < 50) {
            $resultado = "Inapta para doar sangue";
        } 
        else if ($idade < 18 && $peso > 50) {
            $resultado = "Inapta para doar sangue";
        }
        else if ($idade > 69 && $peso > 50) {
            $resultado = "Inapta para doar sangue";
        }
        else if ($peso < 50) {
            $resultado = "Inapta para doar sangue";
        }
        else {
            $resultado = "Apto para doar sangue";
        }
        return $resultado;
    }

    ?>

    <div class="cabecalho">
        <p>Verificação de dados</p>
        <hr>
    </div>

    <div class="resultados">
        <p><b>Idade Informada :</b> <?= $idade ?> Anos</p>
        <p><b>Peso Informado : </b> <?= $peso ?> Kg</p>
        <hr>
        <p><b>Situação :</b> <?= calculoSangue($idade, $peso) ?> </p>

        <a href="./Atividade001.html"> Verifique novamente</a>
    </div>

</body>

</html>