<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1 align="center">Categor&iacute;as</h1>        
        <p><strong>Filtrar categorias:</strong></p>
                          <form action="categorias2.php" method="post" name="form1" id="form1" style="font-weight: bold">
          <p align="center">Filtrar por nombre:
              <input type="text" name="cat_nombre" id="cat_nombre" />
              <input type="submit" name="button2" id="button2" value="Buscar" />
              </label>
          </p>
        </form>
                    <p>&nbsp; </p>
                     <p><a href="categorias_add.php" class="square1" style="font-weight: bold">Agregar una nueva categoria</a></p>
<table width="100%" border="0">
                        <tr class="parentcell">
                          <td width="70%" height="18" valign="top"><div align="center" class="padded">Nombre</div></td>
                          <td width="30%" valign="top"><div align="center" class="padded">Acciones</div></td>
                        </tr>
                        </table>
                        <?php
						 $cat_nombre = $_REQUEST[cat_nombre];

		 include('config.php');
 $sql="SELECT * FROM categorias WHERE cat_nombre LIKE '%$cat_nombre%' ORDER BY cat_nombre ASC ";
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

echo "<div class='hovertable'> <table width='100%' border='0'><tr><td width='70%' height='20' valign='top' class='singlecell'><strong>$cat_nombre</strong></td><td width='30%' valign='top' class='singlecell'><p><a href='categorias_borrar.php?cat_id=$cat_id'>Eliminar</a> / <a href='categorias_mod.php?cat_id=$cat_id'>Modificar</a></p></td></tr> </table></div>
";
}

 ?>        <p>&nbsp;</p><p>&nbsp;</p>
        <p><a href="index.php" class="square" style="font-weight: bold">Regresar al inicio</a></p>
        <p>&nbsp;</p>
        <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include('footer.php');?>