<?php
session_start(); 
//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include ('autenticacion.php');
 ?><?php include 'header.php'; ?>
<h1>Banners</h1>
<div style="clear:both;">&nbsp;</div>


<table width="100%" border="0">
    <tr class="parentcell">
        <td width="70%" height="18" valign="top"><div align="center" class="padded">Ubicaci&oacute;n</div></td>
        <td width="30%" height="18" valign="top"><div align="center" class="padded">Acciones</div></td>
        </tr>
</table>
<?php
include('config.php');
 $sql="SELECT * FROM banners ORDER BY banners_id DESC ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro ningun elemento en las descripciones de banners.</p>";}

//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

while ($myrow = $result->fetch_assoc()) {
$banners_id= $myrow["banners_id"];
$banners_url= $myrow["bannersdes_nombre"];
$banners_desc = $myrow["banners_desc"];

echo "<div class='hovertable'> <table width='100%' border='0'><tr>";
echo "<td width='70%' height='20' valign='top' class='singlecell'>$banners_desc</td>";
echo "<td width='30%' valign='top' class='singlecell'><p>";
echo "<p><a href='banners_mod.php?banners_id=$banners_id'>Modificar</a></p></td></tr></table></div>";
}
?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
<?php  } else {
    //header("location:loginerror.php");
    header("location:index.html");
 } include ('footer.php');?>