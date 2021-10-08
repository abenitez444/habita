<?php
//$db = mysql_connect("localhost","habitain_adinmobi","gerbNje¢r∞j≠3&7");
//mysql_select_db("habitain_movili",$db) or die ("Error en la conexion");

$mysqli = new mysqli('localhost', 'habitain_adinmob', 'ger#bNj@erj3&7', 'habitain_movili');

if ($mysqli->connect_errno) {
    
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    
}
?>