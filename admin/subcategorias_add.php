<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header2.php');?>
		    <form action="subcategoriasadd.php" method="post" enctype="multipart/form-data" >
              <h1>A&ntilde;adir una Subcategor&iacute;a</h1>
              <table width="580" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
              <tr>
                  <td colspan="2" valign="top" class="proc_title">&nbsp;</td>
                </tr>
                <tr>
                  <td width="40%" valign="top"><span style="font-weight: bold">Nombre:</span></td>
            <td width="60%" valign="top"><label>
                    <input name="sub_nombre" type="text" class="buscainput" id="sub_nombre" size="40">
                  </label></td>
                </tr>
                <tr>
                  <td valign="top"><span style="font-weight: bold">Categor&iacute;a padre:</span></td>
                  <td width="60%" valign="top"><select name="sub_parent" id="sub_parent" onchange="obtenerCategorias(this)">
                    <option selected="selected">Seleccione una categoria</option>
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
                  </select></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="right">
                      <input name="A&ntilde;adir" type="submit" class="btnlogin" id="Submit" value="Enviar" />
                  </div></td>
                  </tr>
              </table>
</form>
            <p><a href="subcategorias.php" class='btn'>Regresar.</a></p>  
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>