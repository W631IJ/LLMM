<?php
if ($_SERVER["REQUEST_METHOD"] == "GET"){

    $lang = $_GET["language"];
    echo "El idioma escogido es: ". $lang;

    $size = $_GET["boardSize"];
    echo "<br> El tamaño elegido es de: ". $size;

    $color = $_GET["bgColor"];
    echo "<br> El color de fondo será: ". $color;

    $bola1 = $_GET["ballColor1"];
    echo "<br> La primera bola tendrá el siguiente color: ". $bola1;

    $bola2 = $_GET["ballColor2"];
    echo "<br> La segunda bola tendrá el siguiente color: ". $bola2;

    $bola3 = $_GET["ballColor3"];
    echo "<br> La tercera bola tendrá el siguiente color: ". $bola3;



}

    
