<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
<?php
$tipo = $_REQUEST[tipo];
$buscar = $_REQUEST[buscar];
$busqueda = $_REQUEST[busqueda];
$query2 = $busqueda." LIKE '%".$buscar."%'";
?>

<h1><img src="images/iconos/building.png" alt="Propiedades" width="16" height="16" />&nbsp;Propiedades</h1>
<a href="propiedades_add.php" class="square">Haga click aqui para agregar un propiedad</a>
  
<p><strong>Filtrar propiedades <?php echo $tipo?></strong></p>
<form action="propiedades2.php" method="post" name="form1" id="form1">
          <div align="center">Nombre de marca:
            <input type="text" name="buscar" id="buscar" />
            <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?>" />
            <input type="hidden" name="busqueda" id="busqueda" value="p_marca" />
            <input type="submit" name="button2" id="button2" value="Buscar" />
            </label>
          </div>
</form>
<form action="propiedades2.php" method="post" name="form1" id="form4">
                            <div align="center">Filtrar por categor&iacute;a:
                              <select id="buscar" name="buscar">
                                <option selected="selected" value="">Seleccione categoria</option>
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
                              <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?>" />
                              <input type="hidden" name="busqueda" id="busqueda" value="p_categoria" />
                              <input type="submit" name="button2" id="button2" value="Buscar" />
                            </div>
        </form>
                    <p>&nbsp;</p>
                    <table width="100%" border="0">
                        <tr class="parentcell">
                          <td width="20%" height="18" valign="top"><div align="center" class="padded">Imagen</div></td>
                          <td width="20%" height="18" valign="top"><div align="center" class="padded">Nombre</div></td>
                          <td width="20%" height="18" valign="top"><div align="center" class="padded">Categor&iacute;a</div></td>
                          <td width="20%" height="18" valign="top"><div align="center" class="padded">Subcategor&iacute;a</div></td>                          <td width="20%" valign="top"><div align="center" class="padded">Acciones</div></td>
                        </tr>
        </table>
<?php
include('config.php');


 $sql="SELECT * FROM propiedades WHERE $query2 ORDER BY p_nombre ASC ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro ningun articulo que coincida con la busqueda.</p>";}

//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "<p>&nbsp;</p><p>No se encontro ningun articulo que coincida con la busqueda.</p>";
}

while ($myrow = $result->fetch_assoc()) {
 include ("../fields/propiedadesrows.php");
echo "<div class='hovertable'> <table width='100%' border='0'><tr>";
echo "<td width='20%' height='20' valign='top' class='singlecell'><img src='../images/propiedades/$p_img1b' width='150' border='0'></td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'><strong>$p_nombre</strong></td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'>$p_categoria</td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'>$p_subcategoria</td>";
echo "<td width='20%' valign='top' class='singlecell'>";
echo "<p><a href='propiedades_mod.php?p_id=$p_id'>Modificar</a></p><p><a href='propiedades_borrar.php?p_id=$p_id'>Eliminar</a></p></td></tr> </table></div>";
}

 ?>        <p>&nbsp;</p>
 <p>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include('footer.php');?>