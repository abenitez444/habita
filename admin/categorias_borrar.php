<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include('header.php');?>
               <h1>Categorias</h1>


 <h1>Borrar una categoria</h1> 
 <?php	include('config.php');
 $cat_id = $_REQUEST[cat_id];?><p>Confirma que desea borrar la categoria permanentemente? </p>
<form name="form1" method="post" action="categoriasborrar.php">
          <div align="center">
			<input name="cat_id" type="hidden" id="cat_id" value="<?php echo $cat_id;?>">
              <input name="Submit" type="submit" class="btnlogin" id="Submit" value="Confirmar">
            &nbsp;&nbsp;&nbsp;&nbsp;</div>
            <div align="center"></div>
            </form>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
		    <p><a href="categorias.php" class='btn'>Regresar a categorias.</a></p> 
              <p>&nbsp;</p>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?>