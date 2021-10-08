<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
               <h1>subcategorias</h1>


 <h1>Borrar una subcategoria</h1> 
 <?php	include('config.php');
 $sub_id = $_REQUEST[sub_id];?><p>Confirma que desea borrar la subcategoria permanentemente? </p>
<form name="form1" method="post" action="subcategoriasborrar.php">
          <div align="center">
			<input name="sub_id" type="hidden" id="sub_id" value="<?php echo $sub_id;?>">
              <input name="Submit" type="submit" class="btnlogin" id="Submit" value="Confirmar">
            &nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div align="center"></div>
            </form>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p><a href="subcategorias.php" class='btn'>Regresar a subcategorias.</a></p> 
              <p>&nbsp;</p>
 <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>