<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1>Subcategor&iacute;as</h1>        <p><strong>Filtrar subcategorias:</strong></p>
                          <form action="subcategorias2.php" method="post" name="form1" id="form1" style="font-weight: bold">
          <p align="center">Filtrar por nombre:
              <input type="text" name="sub_nombre" id="sub_nombre" />
              <input type="submit" name="button2" id="button2" value="Buscar" />
              </label>
          </p>
        </form>
                    <p>&nbsp; </p>
                     <p><a href="subcategorias_add.php" class="square1" style="font-weight: bold">Agregar una nueva subcategoria</a></p>	
                    <p><a href="categorias.php" class="square1" style="font-weight: bold">Administracion de categoriaS</a> </p>
        <table width="100%" border="0">
                        <tr class="parentcell">
                          <td width="40%" height="18" valign="top"><div align="center" class="padded">Nombre</div></td>
                          <td width="30%" height="18" valign="top"><div align="center" class="padded">Categoria padre</div></td>
                          <td width="30%" valign="top"><div align="center" class="padded">Acciones</div></td>
                        </tr>
                        </table>
                        <?php
						 $sub_nombre = $_REQUEST[sub_nombre];

		 include('config.php');
 $sql="SELECT * FROM subcategorias WHERE sub_nombre LIKE '%$sub_nombre%' ORDER BY sub_id DESC ";
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
$sub_id = $myrow["sub_id"];
$sub_nombre = $myrow["sub_nombre"];
$sub_parent = $myrow["sub_parent"];

echo "<div class='hovertable'> <table width='100%' border='0'><tr><td width='70%' height='20' valign='top' class='singlecell'><strong>$sub_nombre</strong></td><td width='30%' valign='top' class='singlecell'><p><a href='subcategorias_borrar.php?sub_id=$sub_id'>Eliminar</a> / <a href='subcategorias_mod.php?sub_id=$sub_id'>Modificar</a></p></td></tr> </table></div>
";
}

 ?>        <p>&nbsp;</p><p>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>
     <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?>   <?php include('footer.php');?>