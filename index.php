<?php
//PROGRAMACION ORIENTADA A OBJETOS

include('Personas.php');

//Creacion de un objeto o instancia de la clase
$esperanzaGomez = new Personas();

echo($esperanzaGomez->nombre);

$esperanzaGomez->nombre="Esperancita";
echo "<br>";
echo($esperanzaGomez->nombre);

$nombres=array("Juan","Ana");
echo $nombres[0];

echo "<br>";
$esperanzaGomez->saludar($nombres[0]);



?>