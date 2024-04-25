<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Utilitza $_GET para accedera los valroes del formulario enviado por GET.
    $nom1 = $_GET["name"];
    echo "El nombre introducido és: ". $nom1;

    $correo = $_GET["email"];
    echo "<br> El correo electrónico es: ". $correo;

    $type = $_GET["type"];
    echo "<br> El usuario ha elegido: ". $type;

    $telf = $_GET["phone"];
    echo "<br> El número del usuario es: ". $telf;

    $birth = $_GET["birthday"];
    echo "<br> La fecha de nacimiento es: ". $birth;

    $message = $_GET["message"];
    echo "<br> Mensaje: <p>". $message ."</p>";
}