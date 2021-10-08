<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
include ('header2.php');
 ?>

<?php
$cat_id = $_REQUEST[cat_id];
include ('config.php');
 $sql5="SELECT * FROM cat WHERE cat_id='$cat_id'";
//  $result5 = mysql_query($sql5,$db);
//  $filas5 = mysql_num_rows($result5);
//  if ($filas5==0){
//  echo "<p>&nbsp;</p><p>No se encontro esta seccion.</p>";}

//  while ($myrow = mysql_fetch_array($result5))
//  {
if (!$result5 = $mysqli->query($sql5)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result5->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result5->fetch_assoc()) {
$cat_id= $myrow["cat_id"];
$cat_title= $myrow["cat_title"];
$cat_desc = $myrow["cat_desc"];
?>

        <h1>Modificar seccion</h1>
        <form action="catsmod.php" method="post" enctype="multipart/form-data" >
              <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5" class="tableleft">
                <tr>
                  <td colspan="2" valign="top" class="procat_title">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%" valign="top"><span style="font-weight: bold">Nombre de la sección:</span></td>
                  <td width="70%" valign="top"><input name="cat_id" type="hidden" class="buscainput" id="cat_id" style="width:100%;" value="<?php echo $cat_id?>" /><?php echo $cat_title?></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span style="font-weight: bold">Descripción:</span>                    <label></label></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><label>
                    <textarea name="cat_desc" rows="40" class="buscainput" id="cat_desc" style="width:100%;"><?php echo $cat_desc;?></textarea>
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="right">
                      <input name="Modificar" type="submit" class="btnlogin" id="Submit" value="Enviar"  style="width:100%;" />
                  </div></td>
                  </tr>
              </table>
</form>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
<p>&nbsp;</p>

<?php } } else {
header("location:index.html");
 } include ('footer.php');?>