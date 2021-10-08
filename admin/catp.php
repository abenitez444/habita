<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
?><?php include ('header2.php');?>
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
$cat_desc2 = $myrow["cat_desc2"];
$cat_img1 = $myrow["cat_img1"];
$cat_img2 = $myrow["cat_img2"];
$cat_img3 = $myrow["cat_img3"];
$catimg3uso = $myrow["catimg3uso"];
?>

        <h1>Modificar seccion</h1>
        <form action="catsmod.php" method="post" enctype="multipart/form-data" >
              <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5" class="tableleft">
                <tr>
                  <td colspan="2" valign="top" class="procat_title">&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><span style="font-weight: bold">Modificar&nbsp;info&nbsp;de&nbsp;<?php echo $cat_title?>
                  <input name="cat_id" type="hidden" class="buscainput" id="cat_id" style="width:100%;" value="<?php echo $cat_id?>" />
                  </span></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top"><label>
                    <input name="cat_desc" type="text" class="buscainput" id="cat_desc" style="width:100%;" value="<?php echo $cat_desc;?>" />
                  </label></td>
                </tr>
                <tr>
                  <td colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td width="30%">&nbsp;</td>
                  <td width="70%"><div align="right">
                      <input name="Modificar" type="submit" class="btnlogin" id="Submit" value="Enviar"  style="width:100%;" />
                  </div></td>
                  </tr>
              </table>
</form>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>

<?php } ?>
 <?php } else {
header("location:index.html");
 } ?><?php include 'footer.php'; ?>