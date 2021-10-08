<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
<?php
$tipo = $_REQUEST[tipo];?>

<h1><img src="images/iconos/building.png" alt="Propiedades" width="16" height="16" />&nbsp;Propiedades</h1>
<form action="propiedades2.php" method="post" name="form1" id="form3">
    <table border="0" align="center" cellpadding="5" cellspacing="5" style="width:45%;float:left;">
      <tr>
        <td><div align="right">
            <input type="hidden" name="tipo2" id="tipo2" value="<?php echo $tipo;?>" />
            <input type="hidden" name="busqueda2" id="busqueda2" value="p_nombre" />
            <span style="font-weight: bold">Filtrar por nombre</span>: </div></td>
        <td><input type="text" name="buscar2" id="buscar2" /></td>
        <td><input type="submit" name="button" id="button" value="Buscar" /></td>
      </tr>
    </table>
    <table border="0" align="center" cellpadding="5" cellspacing="5" style="width:45%;float:right;">
      <tr>
        <td><div align="right">
            <input type="hidden" name="tipo" id="tipo" value="<?php echo $tipo;?>" />
            <input type="hidden" name="busqueda" id="busqueda" value="p_categoria" />
            <span style="font-weight: bold">Filtrar por categoria: </span></div></td>
        <td><select id="buscar" name="buscar">
          <option selected="selected" value="">Seleccione categoria</option>
          <?php
		 include('config.php');
	 $sql="SELECT * FROM categorias ORDER BY cat_nombre ASC ";
// 	 $result = mysql_query($sql,$db);
// 	 while ($myrow = mysql_fetch_array($result))
// 	 {
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
        <td><input type="submit" name="button3" id="button3" value="Buscar" /></td>
      </tr>
    </table>
  
</form>
<div style="clear:both;">&nbsp;</div>
<a href="propiedades_add.php" class="square"><img src="images/iconos/add.png" alt="Agregar" width="16" height="16" border="0" />&nbsp;Agregar una propiedad</a>
<div style="clear:both;">&nbsp;</div>
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
 $sql="SELECT * FROM propiedades ORDER BY p_id DESC ";
//  $result = mysql_query($sql,$db);
//  $filas = mysql_num_rows($result);
//  if ($filas==0){
//  echo "<p>&nbsp;</p><p>No se encontro ningun articulo listado en el sitio.</p>";}

//  while ($myrow = mysql_fetch_array($result))
//  {
if (!$result = $mysqli->query($sql)) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
}

if ($result->num_rows === 0) {
    echo "<p>&nbsp;</p><p>No se encontro ningun articulo listado en el sitio.</p>";
}

while ($myrow = $result->fetch_assoc()) {
 include ("../fields/propiedadesrows.php");
 	if ($p_activo==0){ $respuestaclase="hovertable noactivo"; $respuestatitulo="Activar";}else{$respuestaclase="hovertable activo"; $respuestatitulo="Desactivar";}
 
echo "<div class='$respuestaclase' id='pid-$p_id'> <table width='100%' border='0'><tr>";
echo "<td width='20%' height='20' valign='top' class='singlecell'><img src='../images/propiedades/$p_img1b' width='150' border='0'></td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'><strong>$p_nombre</strong></td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'>$p_categoria</td>";
echo "<td width='20%' height='20' valign='top' class='singlecell'>$p_subcategoria</td>";
echo "<td width='20%' valign='top' class='singlecell'>";
echo "<p><a href='propiedades_mod.php?p_id=$p_id'>Modificar</a></p><p><a href='propiedades_borrar.php?p_id=$p_id'>Eliminar</a></p><p><a href='#' onclick='activardesactivar($p_id); return false;' id='pid-titulo-$p_id' >$respuestatitulo</a></p></td></tr> </table></div>";  
}

 ?>        <p>&nbsp;</p>
 <p>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>
<script type="text/javascript">        

function activardesactivar(pid){
		$.ajax({
			url: 'propiedades_activardesactivar.php',
			data: 'p_id=' + pid,
			dataType: 'json',
			success: function(data){
				var clase = "hovertable "+data['clase'];
				$("#pid-titulo-"+pid).html(data['titulo']);
				$("#pid-"+pid).removeClass();
				$("#pid-"+pid).addClass(clase);
			}
			
		});	
		return false;
	} 
</script>	   
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>  <?php include('footer.php');?>