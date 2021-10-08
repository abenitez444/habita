<meta http-equiv="refresh" content="2;URL=categorias.php">

<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
<?php 

include('config.php'); 

 $cat_nombre = $_REQUEST[cat_nombre];


	$sql = "INSERT INTO categorias (cat_nombre) VALUES ('$cat_nombre')";
  //$result = mysql_query($sql);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}  

?>
		    <h1>La categoria ha sido publicada! </h1>
		    <p>&nbsp;</p>
		    <p><a href="categorias.php" class='btn'>Regresar a categorias.</a></p>          </TD>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>