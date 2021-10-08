<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
 include ('header2.php');
 ?>
<?php
$p_id = $_REQUEST[p_id];
include ('config.php');
 $sql5="SELECT * FROM propiedades WHERE p_id='$p_id'";
//  $result5 = mysql_query($sql5,$db);
//  $filas5 = mysql_num_rows($result5);
//  if ($filas5==0){
//  echo "<p>&nbsp;</p><p>No se encontro esta propiedad.</p>";}

//  while ($myrow = mysql_fetch_array($result5))
//  {
if (!$result5 = $mysqli->query($sql5)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result5->num_rows === 0) {
    echo "<p>&nbsp;</p><p>No se encontro esta propiedad.</p>";
}

while ($myrow = $result5->fetch_assoc()) {
include ("../fields/propiedadesrows.php");
if($p_destacada=="si"){$checado="checked='checked'";}
?>

        <h1>Modificar una propiedad</h1>
        <form action="propiedadesmod.php" method="post" enctype="multipart/form-data" >
<input name="p_id" type="hidden" class="buscainput" id="p_id" style="width:100%;" value="<?php echo $p_id?>" />
        <input name="p_img1" type="hidden" class="buscainput" id="p_img1" style="width:100%;" value="<?php echo $p_img1;?>" />
        <input name="p_img2" type="hidden" class="buscainput" id="p_img2" style="width:100%;" value="<?php echo $p_img2;?>" />       
        <input name="p_img3" type="hidden" class="buscainput" id="p_img3" style="width:100%;" value="<?php echo $p_img3;?>" />
        <input name="p_img4" type="hidden" class="buscainput" id="p_img4" style="width:100%;" value="<?php echo $p_img4;?>" />
        <input name="p_img5" type="hidden" class="buscainput" id="p_img5" style="width:100%;" value="<?php echo $p_img5;?>" />
        <input name="p_img6" type="hidden" class="buscainput" id="p_img6" style="width:100%;" value="<?php echo $p_img6;?>" />       
        <input name="p_img7" type="hidden" class="buscainput" id="p_img7" style="width:100%;" value="<?php echo $p_img7;?>" />
        <input name="p_img8" type="hidden" class="buscainput" id="p_img8" style="width:100%;" value="<?php echo $p_img8;?>" />
		<input name="p_img9" type="hidden" class="buscainput" id="p_img9" style="width:100%;" value="<?php echo $p_img9;?>" />
		<input name="p_img10" type="hidden" class="buscainput" id="p_img10" style="width:100%;" value="<?php echo $p_img10;?>" />
		<input name="p_img11" type="hidden" class="buscainput" id="p_img11" style="width:100%;" value="<?php echo $p_img11;?>" />

        <input name="p_img1b" type="hidden" class="buscainput" id="p_img1b" style="width:100%;" value="<?php echo $p_img1b;?>" />
        <input name="p_img2b" type="hidden" class="buscainput" id="p_img2b" style="width:100%;" value="<?php echo $p_img2b;?>" /> 
        <input name="p_img3b" type="hidden" class="buscainput" id="p_img3b" style="width:100%;" value="<?php echo $p_img3b;?>" />
        <input name="p_img4b" type="hidden" class="buscainput" id="p_img4b" style="width:100%;" value="<?php echo $p_img4b;?>" />
        <input name="p_img5b" type="hidden" class="buscainput" id="p_img5b" style="width:100%;" value="<?php echo $p_img5b;?>" />
        <input name="p_img6b" type="hidden" class="buscainput" id="p_img6b" style="width:100%;" value="<?php echo $p_img6b;?>" />
        <input name="p_img7b" type="hidden" class="buscainput" id="p_img7b" style="width:100%;" value="<?php echo $p_img7b;?>" />
        <input name="p_img8b" type="hidden" class="buscainput" id="p_img8b" style="width:100%;" value="<?php echo $p_img8b;?>" />
		<input name="p_img9b" type="hidden" class="buscainput" id="p_img8b" style="width:100%;" value="<?php echo $p_img9b;?>" />
		<input name="p_img10b" type="hidden" class="buscainput" id="p_img8b" style="width:100%;" value="<?php echo $p_img10b;?>" />
		<input name="p_img11b" type="hidden" class="buscainput" id="p_img8b" style="width:100%;" value="<?php echo $p_img11b;?>" />

        <table width="95%" border="0" align="center" cellpadding="5" cellspacing="5" class="tableleft">
          <tr>
            <td colspan="4" valign="top" class="proc_title"><h3>Datos generales</h3></td>
          </tr>
          <tr>
            <td width="32%" valign="top"><span style="font-weight: bold">T&iacute;tulo de la propiedad:</span></td>
            <td width="68%" colspan="3" valign="top"><input name="p_nombre" type="text" class="buscainput" id="p_nombre" style="width:100%;" value="<?php echo $p_nombre?>"/></td>
          </tr>
          <tr>
            <td valign="top"><strong>Categor&iacute;a:</strong></td>
            <td colspan="3" valign="top"><select id="p_categoria" name="p_categoria" onchange="obtenerCategorias(this)">
                <option selected="selected" value="<?php echo $p_categoria?>"><?php echo $p_categoria?></option>
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
              </select>
              &nbsp;</td>
          </tr>
          <tr>
            <td valign="top"><strong>Subcategor&iacute;a:</strong></td>
            <td colspan="3" valign="top"><strong>
              <select id="las_categorias" name="las_categorias">
                <option selected="selected" value="<?php echo $p_subcategoria?>"><?php echo $p_subcategoria?></option>
              </select>
              &nbsp;</strong></td>
          </tr>
          <tr>
            <td valign="top"><strong>Precio:</strong></td>
            <td colspan="3" valign="top">$
              <input name="p_precio" type="text" class="buscainput" id="p_precio" style="width:50%;" value="<?php echo $p_precio;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Destacada?</strong></td>
            <td colspan="3" valign="top"><br />
                <label>
                <input name="p_destacada" type="checkbox" value="si" id="p_destacada" style="width:20px;" <?php echo $checado?> />
                  Si</label></td>
          </tr>
          <tr>
            <td valign="top"><strong>Ubicaci&oacute;n:</strong></td>
            <td colspan="3" valign="top"><input name="p_ubicacion" type="text" class="buscainput" id="p_ubicacion" style="width:100%;" value="<?php echo $p_ubicacion;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Rec&aacute;maras:</strong></td>
            <td colspan="3" valign="top"><input name="p_recamaras" type="text" class="buscainput" id="p_recamaras" style="width:50%;" value="<?php echo $p_recamaras;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Ba&ntilde;os:</strong></td>
            <td colspan="3" valign="top"><input name="p_banos" type="text" class="buscainput" id="p_banos" style="width:50%;" value="<?php echo $p_banos;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Autos:</strong></td>
            <td colspan="3" valign="top"><input name="p_autos" type="text" class="buscainput" id="p_autos" style="width:50%;" value="<?php echo $p_autos;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>Construcci&oacute;n:</strong></td>
            <td colspan="3" valign="top"><input name="p_construccion" type="text" class="buscainput" id="p_construccion" style="width:50%;" value="<?php echo $p_construccion;?>" /></td>
          </tr>
<tr>
  <td valign="top"><strong>Terreno:</strong></td>
  <td colspan="3" valign="top"><input name="p_terreno" type="text" class="buscainput" id="p_terreno" style="width:50%;" value="<?php echo $p_terreno;?>" /></td>
</tr>          <tr>
            <td valign="top"><strong>Edad:</strong></td>
            <td colspan="3" valign="top"><input name="p_edad" type="text" class="buscainput" id="p_edad" style="width:50%;" value="<?php echo $p_edad;?>" /></td>
          </tr>
          <tr>
            <td valign="top"><strong>&Aacute;reas:</strong></td>
            <td colspan="3" valign="top"><textarea name="p_areas" rows="10" class="buscainput" id="p_areas" style="width:100%;"><?php echo $p_areas;?></textarea></td>
          </tr>
          <tr>
            <td valign="top"><strong>Servicios:</strong></td>
            <td colspan="3" valign="top"><textarea name="p_servicios" rows="8" class="buscainput" id="p_servicios" style="width:100%;"><?php echo $p_servicios;?></textarea></td>
          </tr>
          <tr>
            <td width="32%" valign="top"><span style="font-weight: bold">Descripci&oacute;n:</span></td>
            <td valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><textarea name="p_desc" rows="40" class="buscainput" id="p_desc" style="width:100%;"><?php echo $p_desc;?></textarea></td>
          </tr>
          <tr>
            <td colspan="2" valign="top"><h3>Im&aacute;genes</h3></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen principal:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img1?>' width="50"   /></span></td>
            <td valign="top"><input name="upload_file1" type="file" class="inpform" id="upload_file1" />
                <input type="hidden" name="which4" value="link_add" />
                <input type="hidden" name="max_file_size4" value="1000000" /></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 1:<br />
                  <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img2?>' width="50"   /></span></span></td>
            <td valign="top"><input name="upload_file2" type="file" class="inpform" id="upload_file2" />
                <input type="hidden" name="which" value="link_add" />
                <input type="hidden" name="max_file_size" value="1000000" /></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 2:<br />
                  <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img3?>' width="50"   /></span></span></td>
            <td valign="top"><label>
              <input name="upload_file3" type="file" class="inpform" id="upload_file3" />
              <input type="hidden" name="which2" value="link_add" />
              <input type="hidden" name="max_file_size2" value="1000000" />
            </label></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 3:<br />
                  <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img4?>' width="50"   /></span></span></td>
            <td valign="top"><label>
              <input name="upload_file4" type="file" class="inpform" id="upload_file4" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 4:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img5?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file5" type="file" class="inpform" id="upload_file5" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 5:<br />
                  <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img6?>' width="50"   /></span></span></td>
            <td valign="top"><label>
              <input name="upload_file6" type="file" class="inpform" id="upload_file6" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 6:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img7?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file7" type="file" class="inpform" id="upload_file7" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
          <tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 7:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img8?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file8" type="file" class="inpform" id="upload_file8" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
		<tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 8:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img9?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file9" type="file" class="inpform" id="upload_file9" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
		<tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 9:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img10?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file10" type="file" class="inpform" id="upload_file10" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>
		<tr>
            <td valign="top"><span style="font-weight: bold">Imagen adicional 10:</span><br />
                <span style="width:100px;"><img src='../images/propiedades/<?php echo $p_img11?>' width="50"   /></span></td>
            <td valign="top"><label>
              <input name="upload_file11" type="file" class="inpform" id="upload_file11" />
              <input type="hidden" name="which3" value="link_add" />
              <input type="hidden" name="max_file_size3" value="1000000" />
            </label></td>
          </tr>




          <tr>
            <td>&nbsp;</td>
            <td colspan="3"><div align="right">
                <input name="A&ntilde;adir" type="submit" class="btnlogin" id="Submit" value="Enviar" " style="width:100%;" />
            </div></td>
          </tr>
        </table>
</form>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>

<?php } 
} else {
    // header("location:loginerror.php");
    header("location:index.html");
 } include ('footer.php');?>