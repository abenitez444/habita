<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
                <h1>A&ntilde;adir Categorias</h1>

		    <form action="categoriasadd.php" method="post" enctype="multipart/form-data" >
		      <table width="580" border="0" align="center" cellpadding="5" cellspacing="2" class="tableleft">
              <tr>
                  <td colspan="2" valign="top" class="proc_title">&nbsp;</td>
                </tr>
                <tr>
                  <td width="40%" valign="top"><span style="font-weight: bold">Nombre:</span></td>
            <td width="60%" valign="top"><label>
                    <input name="cat_nombre" type="text" class="buscainput" id="cat_nombre" size="40">
                  </label></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><div align="right">
                      <input name="A&ntilde;adir" type="submit" class="btnlogin" id="Submit" value="Enviar" />
                  </div></td>
                  </tr>
              </table>
</form>
            <p><a href="categorias.php" class='btn'>Regresar.</a></p>    
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>