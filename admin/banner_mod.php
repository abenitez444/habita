<?php include('header.php');?>
<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
include('config.php');
$update = $_REQUEST[update];
$banner_id = $_REQUEST[banner_id];
$cambio1 = $_REQUEST[cambio1];
$cambio2 = $_REQUEST[cambio2];
if ($update) {
$banner_id = $_REQUEST[banner_id];
$update = $_REQUEST[update];
$banner_id = $_REQUEST[banner_id];
$banner_posicion = $_REQUEST[banner_posicion];
$banner_url = $_REQUEST[banner_url];
$banner_img = $_REQUEST[banner_img];
$cambio2 = $_REQUEST[cambio2];
include('config.php');
if($cambio2=='si'){
$target_path = "../images/banners/";
$target_path = $target_path . basename( $_FILES['upload_file2']['name']); 
if(move_uploaded_file($_FILES['upload_file2']['tmp_name'], $target_path)) {
} else{
    echo "No se subio ningún archivo.";
}
$banner_img =  basename( $_FILES['upload_file2']['name']); 
$sql1 = "UPDATE banner SET banner_img='$banner_img' WHERE banner_id=$banner_id";
//$result1 = mysql_query($sql1);
if (!$result1 = $mysqli->query($sql1)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result1->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}
}

$sql3 = "UPDATE banner SET banner_url='$banner_url' WHERE banner_id=$banner_id";
//$result3 = mysql_query($sql3);
if (!$result3 = $mysqli->query($sql3)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result3->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

echo "<h1>Modificacion lista!</h1><br><p><a href='index.php' class='square'>Regresar al inicio</a></p>";
} 
else if($banner_id) 
{
include('config.php');
// $result = mysql_query("SELECT * FROM banner WHERE banner_id=$banner_id",$db);
// $myrow = mysql_fetch_array($result);
$sql="SELECT * FROM banner WHERE banner_id=$banner_id";

if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}
$myrow = $result->fetch_assoc();
} 
?>
<?php
if ($banner_id) {
$sql = "SELECT * FROM banner WHERE banner_id=$banner_id";
// $result = mysql_query($sql);
// $myrow = mysql_fetch_array($result);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}
$myrow = $result->fetch_assoc();
$banner_id=$myrow["banner_id"];
$banner_posicion=$myrow["banner_posicion"];
$banner_url=$myrow["banner_url"];
$banner_img=$myrow["banner_img"];
$banner_frase= htmlspecialchars($banner_frase);
}if (!$update) {
?>
<h1>Editar banner lateral</h1>
<form action="banner_mod.php" method="post" enctype="multipart/form-data">
  <p>
    <input name="banner_id" type="hidden" id="banner_id" value="<?php echo $banner_id?>" />
    </input>
</p>
  <table width="100%" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="16%">Archivo:</td>
      <td width="84%"><span class="campo">
        <input name="upload_file2" type="file" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="inputform">&nbsp;
          <input name="cambio2" type="checkbox" id="cambio2" value="si" />
Seleccione aqui si desea cambiar el archivo</span></td>
    </tr>
    <tr>
      <td>URL:</td>
      <td><span class="campo" style="margin:15px 0px;">
        <input type="text" name="banner_url" value="<?php echo $banner_url?>" />
      </span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="update" type="submit" class="btnform" id="Submit" value="Enviar" style="width:150px;" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
<p>&nbsp;</p>
</form>
<?php } include ('footer.php');
} else {
    // header("location:loginerror.php");
    header("location:index.html");
 }?>