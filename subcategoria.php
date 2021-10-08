<?php include("header.php");?>
<?php
$categoria = $_REQUEST[categoria];
$subcategoria = $_REQUEST[subcategoria];
include('social_media.php');

?>
  <table width="100%" border="0">
  <tr>
    <td width="79%" height="40" bgcolor="#AC4843" class="propiedades"><strong><?php echo $subcategoria?>&nbsp;en&nbsp;&nbsp;<a href="categoria.php?categoria=<?php echo $categoria?>" style="color:#FFFFFF"><?php echo $categoria?></a></strong></td>
    <td width="6%" align="center" valign="middle"><a href="<?php echo $facebook?>" target="_blank"><img src="png/facebook.png" alt="Facebook" width="25" height="25" border="0"/></a></td>
    <td width="5%" align="center" valign="middle"><a href="<?php echo $twitter?>" target="_blank"><img src="png/twitter.png" alt="Twitter" width="25" height="25" border="0"/></a></td>
    <td width="10%" align="center" valign="middle"><a href="<?php echo $youtube?>" target="_blank"><img src="png/youtube.png" alt="YouTube" width="63" height="25" border="0"/></a></td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="10">
    <tr>
    <td width="253" colspan="4" valign="top">
<table width="100%" border="0" cellspacing="0" cellpadding="7">
        <tr>
          <td width="15%" bgcolor="#000000"></td>
          <td width="50%" bgcolor="#000000"><div align="center"><span style="color: #FFFFFF; font-weight: bold">Ubicaci&oacute;n</span></div></td>
          <td width="35%" bgcolor="#000000"><div align="center"><span style="color: #FFFFFF; font-weight: bold">Precio</span></div></td>
        </tr>
    <?php
 $sql="SELECT * FROM propiedades WHERE p_categoria='$categoria' AND p_subcategoria='$subcategoria' and activo='1' ORDER BY p_precio DESC ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro ninguna propiedad en esta categoria.</p>";}
// $plus=0;
//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "<p>&nbsp;</p><p>No se encontro ninguna propiedad en esta categoria.</p>";
}

while ($myrow = $result->fetch_assoc()) {
 include ("fields/propiedadesrows.php");
 $odd="background-color:#e6e6e6;";
 $plus=$plus+1;
 $odd="";
 $resultado=$plus%2;
 if($resultado==0){$odd="background-color:#e6e6e6;";}
 ?>
        <tr>
          <td valign="top" style="margin-bottom:1px solid #c7c7c7;<?php echo $odd;?>"><div align="center"><a href="propiedad.php?p_id=<?php echo $p_id?>"><img src="images/propiedades/<?php echo $p_img1b?>" alt="<?php echo $p_nombre?>" border="0" width="70"/></a></div></td>
          <td valign="top" style="margin-bottom:1px solid #c7c7c7;<?php echo $odd;?>"><a href="propiedad.php?p_id=<?php echo $p_id?>"><strong><?php echo $p_ubicacion?></strong></a><br /><?php echo $p_nombre?></td>
          <td valign="top"  style="margin-bottom:1px solid #c7c7c7;<?php echo $odd;?>color:##000000;font-weight:bold">
            <div align="center">$<?php echo $p_precio?></div></td>
        </tr>
 <?php } ?>
</table> 
 </td>
    <td width="166" align="center" valign="top">
    <?php include ("banner.php"); ?>    </td>
    </tr>
  </table>
<?php include("footer.php");?>
