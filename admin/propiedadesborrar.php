<meta http-equiv="refresh" content="2;URL=propiedades.php">
<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include ('header.php');?>
      <h1>Borrar propiedad</h1>
     <p>
        <?php
		 include('config.php');
include ("../fields/propiedadesrequest.php");

$sql = "DELETE FROM propiedades WHERE p_id ='$p_id'";
//$result = mysql_query($sql);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
$sql = "DELETE FROM atributos_propiedades WHERE p_id ='$p_id'";
//$result = mysql_query($sql);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

  echo "<p class='content'>Esta siendo redirigido a la pagina de inicio<p class='content'><br>";

echo "</br></br></br><p class='content'>La propiedad ha sido borrada.</p></br><p class='content'><a href='propiedades.php'>Regresar.</a></p>";
include ('footer.php');?>
 <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>