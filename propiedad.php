<?php include("header.php");?>
<?php
$p_id = $_REQUEST[p_id];
include('social_media.php');
 $sql="SELECT * FROM propiedades WHERE p_id='$p_id' ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro esta propiedad.</p>";}
//  $myrow = mysql_fetch_array($result);
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "Lo sentimos. No se pudo encontrar una coincidencia";
}

$myrow = $result->fetch_assoc();

 include ("fields/propiedadesrows.php");
 
 $p_areas=strip_tags($p_areas);
 $p_servicios=strip_tags($p_servicios);
 $p_desc=strip_tags($p_desc);
?>
  <table width="100%" border="0">
  <tr>
    <td width="79%" height="40" bgcolor="#AC4843" class="propiedades"><a href="categoria.php?categoria=<?php echo $p_categoria?>" style="color:#FFFFFF"><?php echo $p_categoria?></a>&nbsp;&raquo;&nbsp;<a href="subcategoria.php?categoria=<?php echo $p_categoria?>&subcategoria=<?php echo $p_subcategoria?>" style="color:#FFFFFF"><?php echo $p_subcategoria?></a>&nbsp;&raquo;&nbsp;<strong><?php echo $p_nombre?></strong></td>
    <td width="6%" align="center" valign="middle"><a href="<?php echo $facebook?>" target="_blank"><img src="png/facebook.png" alt="Facebook" width="25" height="25" border="0"/></a></td>
    <td width="5%" align="center" valign="middle"><a href="<?php echo $twitter?>" target="_blank"><img src="png/twitter.png" alt="Twitter" width="25" height="25" border="0"/></a></td>
    <td width="10%" align="center" valign="middle"><a href="<?php echo $youtube?>" target="_blank"><img src="png/youtube.png" alt="YouTube" width="63" height="25" border="0"/></a></td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="3" cellspacing="2" style="margin-top:10px;">
    <tr>
    <td colspan="5" rowspan="10" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img1?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img1b?>" alt="Propiedad" border="0" /></a></div>      </td>
    <td width="106" valign="top"><span style="font-weight: bold">Ubicaci&oacute;n:</span></td>
    <td width="400" valign="top"><?php echo $p_ubicacion;?></td>
    </tr>
    
    <tr>
      <td valign="top"><span style="font-weight: bold">Precio:</span></td>
      <td width="400" valign="top">$<?php echo $p_precio;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Construcci&oacute;n:</span></td>
      <td width="400" valign="top"><?php echo $p_construccion;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Terreno:</span></td>
      <td width="400" valign="top"><?php echo $p_terreno;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Rec&aacute;maras:</span></td>
      <td width="400" valign="top"><?php echo $p_recamaras;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Ba&ntilde;os:</span></td>
      <td width="400" valign="top"><?php echo $p_banos;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Autos:</span></td>
      <td width="400" valign="top"><?php echo $p_autos;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">Edad:</span></td>
      <td width="400" valign="top" style="font-weight:normal;"><?php echo $p_edad;?></td>
    </tr>
    <tr>
      <td valign="top"><span style="font-weight: bold">&Aacute;reas:</span></td>
      <td width="400" valign="top" style="font-weight:normal;"><?php echo $p_areas;?></td>
    </tr>
    <tr>
      <td rowspan="2" valign="top"><span style="font-weight: bold">Servicios:</span> </td>
      <td width="400" rowspan="2" valign="top" style="font-weight:normal;"><?php echo $p_servicios?><br /><br />
        <?php echo $p_desc?></td>
    </tr>

    <tr>
	<td>
		<table cellpadding="0" cellspacing="0" width="1%" style="margin-left: 25px">
    	<tr>
		<?php $cuantos=0;?>
      	<?php if($p_img2!='none.jpg' && $p_img2!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img2?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img2b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
      	<?php if($p_img3!='none.jpg' && $p_img3!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img3?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img3b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
      	<?php if($p_img4!='none.jpg' && $p_img4!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img4?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img4b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
      	<?php if($p_img5!='none.jpg' && $p_img5!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img5?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img5b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
      	<?php if($p_img6!='none.jpg' && $p_img6!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img6?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img6b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
	 	</tr>
	 	<tr>
	  	<?php if($p_img7!='none.jpg' && $p_img7!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img7?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img7b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
	  	<?php if($p_img8!='none.jpg' && $p_img8!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img8?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img8b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
	  	<?php if($p_img9!='none.jpg' && $p_img9!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img9?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img9b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
	  	<?php if($p_img10!='none.jpg' && $p_img10!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img10?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img10b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
	  	<?php if($p_img11!='none.jpg' && $p_img11!=''){ $cuantos++; ?><td width="1%" valign="top"><div align="center"><a href="images/propiedades/<?php echo $p_img11?>" rel="prettyPhoto[Propiedad]"><img src="images/propiedades/<?php echo $p_img11b?>" alt="<?php echo $p_nombre?>" width="64"border="0"/></a></div></td><?php } ?>
      	</tr>
		</table>
	</td>
    </tr>
    <tr>
      <td colspan="6" valign="top"><p align="center" style="font-weight: bold"><a href="cotizacion.php?propiedad=<?php echo $p_nombre?>"><img src="images/btninfo.png" alt="Informacion" border="0" /></a></p>        </td>
      </tr>
  </table>
<?php include("footer.php");?>
