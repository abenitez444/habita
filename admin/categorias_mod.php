<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1>Categorias</h1>

<?php
 include('config.php');
 $update = $_REQUEST[update];
	$cat_id = $_REQUEST[cat_id];
if ($update) {
$cat_id = $_REQUEST[cat_id];
 $update = $_REQUEST[update];
 $cat_nombre = $_REQUEST[cat_nombre];

    $sql = "UPDATE categorias SET cat_nombre='$cat_nombre' WHERE cat_id=$cat_id";
  //$result = mysql_query($sql);
  if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
  echo "<h1>Modificacion lista!</h1><br><p><a href='categorias.php'>Regresar al inicio</a></p>";
} 

  else if($cat_id)
  
{
include('config.php');
// $result = mysql_query("SELECT * FROM categorias WHERE cat_id=$cat_id",$db);
//  $myrow = mysql_fetch_array($result);
} 
$sql="SELECT * FROM categorias WHERE cat_id=$cat_id";

if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

$myrow = $result->fetch_assoc();
?>

<?php
  if ($cat_id) {
    $sql = "SELECT * FROM categorias WHERE cat_id=$cat_id";
    // $result = mysql_query($sql);
    // $myrow = mysql_fetch_array($result);
    if (!$result = $mysqli->query($sql)) {
        echo "Lo sentimos, este sitio web está experimentando problemas.";
    }
    
    if ($result->num_rows === 0) {
        echo "Lo sentimos. No se pudo encontrar una coincidencia";
    }
    
    $myrow = $result->fetch_assoc();
	$cat_id = $myrow["cat_id"];
 $cat_nombre = $myrow["cat_nombre"];
}if (!$update) {

    ?>


		    <h1>Editar categoria</h1>
	        <div align="center"><a href="#"></a></div>
	    <form action="categorias_mod.php" method="post" enctype="multipart/form-data" onSubmit="return formCheck(this);" >
<table width="580" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
  <tr>
    <td colspan="2" valign="top" class="proc_title">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%" valign="top"><span style="font-weight: bold">Nombre:</span></td>
    <td width="60%" valign="top">
      <input name="cat_id" type="hidden" id="cat_id" value="<?php echo $cat_id?>" />
      <input name="cat_nombre" type="text" class="buscainput" id="cat_nombre" value="<?php echo $cat_nombre?>" size="40" />   </td>
  </tr>
                  

  <tr>
    <td>&nbsp;</td>
    <td><div align="right">
      <input name="update" type="submit" class="btnlogin" id="Submit" value="Enviar cambios" />
    </div></td>
  </tr>
</table>
<p>

	    </form>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php } include ('footer.php');?>