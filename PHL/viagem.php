<?php
 if(isset($_POST["origem"]) && isset($_POST["destino"])
     && isset($_POST["distanciaKm"]) && isset($_POST["pedagios"])){

        $origem = $_POST["origem"];
        $destino = $_POST["destino"];
        $distanciaKm = $_POST["distanciaKm"];
        $pedagios = $_POST["pedagios"];

        $valorFrete = 0;

        $valorFrete = $distanciaKm * 6;

        $valorFrete += $pedagios * 9.4;

}else{
     echo "Você não enviou os dados";
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Valor do frete</title>
</head>
<body>
    <p class="resultado">A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$ <em><?= number_format($valorFrete,2,",", ".")?></em>.</p>
</body>
</html>




