<meta http-equiv="refresh" content="2;URL=subcategorias.php">

<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
<?php 

include('config.php'); 

 $sub_nombre = $_REQUEST[sub_nombre];
 $sub_parent = $_REQUEST[sub_parent];
 $sub_consejos = $_REQUEST[sub_consejos];

	$sql = "INSERT INTO subcategorias (sub_nombre, sub_parent) VALUES ('$sub_nombre','$sub_parent')";
  //$result = mysql_query($sql);
  if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

?>
		    <h1>La subcategoria ha sido publicada! </h1>
		    <p>&nbsp;</p>
		    <p><a href="subcategorias.php" class='btn'>Regresar a subcategorias.</a></p>          </TD>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>