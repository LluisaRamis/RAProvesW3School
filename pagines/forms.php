<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$usuari = htmlspecialchars($_POST['usuari']);
$pass = htmlspecialchars($_POST['pass']);
echo "<h1> Nom d'usuari: " . $usuari . "</h1>" ;
echo "<h1> Contrasenya: " . $pass . "</h1>";

}else {
    echo "<h1> No s'ha trobat cap formulari.</h1>";

}

?>