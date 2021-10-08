<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header2.php');?>
                <h1>subcategorias</h1>

<?php
 include('config.php');
 $update = $_REQUEST[update];
	$sub_id = $_REQUEST[sub_id];
if ($update) {
$sub_id = $_REQUEST[sub_id];
 $update = $_REQUEST[update];
 $sub_nombre = $_REQUEST[sub_nombre];
 $sub_parent = $_REQUEST[sub_parent];
 $sub_consejos = $_REQUEST[sub_consejos];

    $sql = "UPDATE subcategorias SET sub_nombre='$sub_nombre',sub_parent='$sub_parent'  WHERE sub_id=$sub_id";
  //$result = mysql_query($sql);
  if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}
  echo "<p>&nbsp;</p><h1>Modificacion lista!</h1><br><p><a href='subcategorias.php'>Regresar a subcategorias</a></p>";
} 

  else if($sub_id)
  
{
include('config.php');
// $result = mysql_query("SELECT * FROM subcategorias WHERE sub_id=$sub_id",$db);
//  $myrow = mysql_fetch_array($result);
$sql="SELECT * FROM subcategorias WHERE sub_id=$sub_id";

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
  if ($sub_id) {
    $sql = "SELECT * FROM subcategorias WHERE sub_id=$sub_id";
    // $result = mysql_query($sql);
    // $myrow = mysql_fetch_array($result);
    if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

$myrow = $result->fetch_assoc();
	$sub_id = $myrow["sub_id"];
 $sub_nombre = $myrow["sub_nombre"];
 $sub_parent = $myrow["sub_parent"];
 $sub_consejos = $myrow["sub_consejos"];
} if (!$update) {

    ?>


		    <h1>Editar subcategoria</h1>
	        <div align="center"><a href="#"></a></div>
	    <form action="subcategorias_mod.php" method="post" enctype="multipart/form-data" onSubmit="return formCheck(this);" >
<table width="580" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
  <tr>
    <td colspan="2" valign="top" class="proc_title">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%" valign="top"><span style="font-weight: bold">Nombre:</span></td>
    <td width="60%" valign="top">
      <input name="sub_id" type="hidden" id="sub_id" value="<?php echo $sub_id?>" />
      <input name="sub_nombre" type="text" class="buscainput" id="sub_nombre" value="<?php echo $sub_nombre?>" size="40" />   </td>
  </tr>
                  
 <tr>
                  <td valign="top"><span style="font-weight: bold">Categor&iacute;a padre:</span></td>
                  <td width="60%" valign="top"><select id="sub_parent" name="sub_parent" onchange="obtenerCategorias(this)">
                    <option value="<?php echo $sub_parent?>" selected="selected"><?php echo $sub_parent?></option>
                    <?php
		 include('config.php');
 $sql="SELECT * FROM categorias ORDER BY cat_nombre ASC ";
//  $result = mysql_query($sql,$db);
//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result->fetch_assoc()) {
$cat_id = $myrow["cat_id"];
$cat_nombre = $myrow["cat_nombre"];
echo "<option value='$cat_nombre'>$cat_nombre</option>";
}

 ?>
                  </select></td>
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
<?php } include ('footer.php');?>
 <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>