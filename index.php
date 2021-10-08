<?php include("header.php");?>
<?php
$p_id = $_REQUEST[p_id];
include('social_media.php');
?>
<table width="100%" border="0">
  <tr>
    <td width="79%" height="40" bgcolor="#AC4843" class="propiedades">PROPIEDADES DESTACADAS</td>
    <td width="6%" align="center" valign="middle"><a href="<?php echo $facebook?>" target="_blank"><img src="png/facebook.png" alt="Facebook" width="25" height="25" border="0"/></a></td>
    <td width="5%" align="center" valign="middle"><a href="<?php echo $twitter?>" target="_blank"><img src="png/twitter.png" alt="Twitter" width="25" height="25" border="0"/></a></td>
    <td width="10%" align="center" valign="middle"><a href="<?php echo $youtube?>" target="_blank"><img src="png/youtube.png" alt="YouTube" width="63" height="25" border="0"/></a></td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="10">
    <tr>
    <?php

 $sql="SELECT * FROM propiedades WHERE p_destacada='si' and activo='1' ORDER BY p_id DESC LIMIT 2";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro ninguna propiedad en el sistema.</p>";}

//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "<p>&nbsp;</p><p>No se encontro ninguna propiedad en el sistema.</p>";
}

while ($myrow = $result->fetch_assoc()) {
 include ("fields/propiedadesrows.php");?>
    <td width="684" valign="top"><a href="propiedad.php?p_id=<?php echo $p_id?>"><img src="images/propiedades/<?php echo $p_img1b?>" alt="<?php echo $p_nombre?>" border="0" /></a> <div class="propiedad_nombre_inicio"><a href="propiedad.php?p_id=<?php echo $p_id?>"><strong><?php echo $p_ubicacion?></strong></a><br /><?php echo $p_nombre?><br /><div class="precio"> $<?php echo $p_precio?></div></div>
      <p align="center"><?php echo $p_desc?></p>
    </td>
    <?php } ?>
    <td width="170" align="center" valign="middle"><?php include ("banner.php"); ?></td>
    </tr>
  </table>
<?php include("footer.php");?>
