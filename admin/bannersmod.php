<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
include ('autenticacion.php');
 ?><meta http-equiv="refresh" content="5;URL=banners.php" />
<?php 
include ('header.php');
$banners_id= $_REQUEST[banners_id];
$banners_url= $_REQUEST[banners_url];
$banners_desc= $_REQUEST[banners_desc];include('config.php');
$cambio= $_REQUEST[cambio];
include('config.php');

if($cambio=='si'){
$target_path = "../images/banners/";
$target_path = $target_path . basename( $_FILES['upload_file1']['name']); 
if(move_uploaded_file($_FILES['upload_file1']['tmp_name'], $target_path)) {
} else{
    echo "No se subio ningún archivo.";
}
$banners_img =  basename( $_FILES['upload_file1']['name']); 
$sql2 = "UPDATE banners SET banners_img='$banners_img' WHERE banners_id=$banners_id";
//$result2 = mysql_query($sql2);
if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
}
$sql2 = "UPDATE banners SET banners_url='$banners_url' WHERE banners_id=$banners_id";
//$result2 = mysql_query($sql2);
if (!$result2 = $mysqli->query($sql2)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
?>
<h1>Actualizacion</h1>
<div align="center"><strong>El elemento en descripciones de banners ha sido modificado<br /></strong></div>
<p>&nbsp;</p>
<p>Esta siendo redirigido automaticamente al inicio en 5 segundos.</p>
<p><a href="banners.php" class="square1">Haga click aqui si no es redirigido</a></p>
<p>&nbsp;</p>
<?php  } else {
header("location:index.html");
 } include ('footer.php');?>