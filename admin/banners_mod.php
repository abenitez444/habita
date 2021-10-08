<?php
session_start(); 
if (isset($_SESSION['miusuario'])) {
include ('autenticacion.php');
 ?><?php include('header2.php');?>
<?php
$banners_id = $_REQUEST[banners_id];
include ('config.php');
$sql5="SELECT * FROM banners WHERE banners_id='$banners_id'";
// $result5 = mysql_query($sql5,$db);
// $filas5 = mysql_num_rows($result5);
// if ($filas5==0){
// echo "<p>&nbsp;</p><p>No se encontro el elemento.</p>";}

// while ($myrow = mysql_fetch_array($result5))
// {
if (!$result5 = $mysqli->query($sql5)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result5->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result5->fetch_assoc()) {
$banners_id= $myrow["banners_id"];
$banners_url= $myrow["banners_url"];
$banners_desc = $myrow["banners_desc"];?>

<h1>Modificar elemento</h1>
<form action="bannersmod.php" method="post" enctype="multipart/form-data" >
<table width="95%" border="0" align="center" cellpadding="5" cellspacing="5" bgcolor="#FFFFFF" class="tableleft">
<tr>
<td width="100" colspan="2" valign="top">&nbsp;</td>
                </tr>
                <tr>
                  <td valign="top"><span style="font-weight: bold">
                    <input name="banners_id" type="hidden" class="buscainput" id="banners_id" style="width:100%;" value="<?php echo $banners_id?>" />
                    URL del banner:</span></td>
                  <td valign="top"><label>
                    <input name="banners_url" type="text" class="buscainput" id="banners_password4" style="width:100%;" value="<?php echo $banners_url?>" />
                  </label></td>
                </tr>
                <tr>
                  <td valign="top"><span style="font-weight: bold">Imagen:</span></td>
                  <td valign="top"><input name="upload_file1" type="file" class="inpform" id="upload_file1" />
        <div class="inputform">
          <input name="cambio" type="checkbox" id="cambio" value="si" />
        Seleccione aqui si desea cambiar la imagen</div>
        �</td>
                </tr>
                <tr>
                  
    </tr>
                
<tr>
<td colspan="2" bgcolor="#FFFFFF">
  <div align="right"><input name="Modificar" type="submit" class="btnlogin" id="Submit" value="Enviar"  style="width:100%;" />
  </div></td>
</tr>
</table>
</form>
<p><a href="banners.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
<p>&nbsp;</p>
<?php }  } else {
    //header("location:loginerror.php");
    header("location:index.html");
 } include ('footer.php');?>