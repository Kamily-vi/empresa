<?php

if (
    isset($_POST["cidadeOrigem"]) && isset($_POST["cidadeDestino"])
    && isset($_POST["distanciaKm"]) && isset($_POST["pedagios"])
) {

$cidadeOrigem = $_POST["cidadeOrigem"]
$cidadeDestino = $_POST["cidadeDestino"]
$distanciaKm = $_POST["distanciaKm"]
$pedagios = $_POST["pedagios"]
$total = $_POST


$valorpedagio = ($pedagio * 9,40)
$valordistancia = ($distanciaKm * 6)
$total = ($distanciaKm + $pedagio)

echo "A viagem de $cidadeOrigem á $cidadeDestino irá custar o valor totaal de $total"




