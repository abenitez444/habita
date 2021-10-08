<?php 
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include ('header.php');?> 
<?php
include('config.php'); 
include ("../fields/propiedadesrequest.php");
?>
		    <h1>Borrar propiedad</h1>
	    <p>Confirma que desea borrar la propiedad?</p>
      <form name="form1" method="post" action="propiedadesborrar.php">
          <div align="center">
			<input name="p_id" type="hidden" id="p_id" value="<?php echo $p_id;?>">
              <input name="Submit" type="submit" class="btnlogin" id="Submit" value="Confirmar">
              &nbsp;&nbsp;&nbsp;&nbsp;            </div>
            <div align="center"></div>
        </form>
		    <p>&nbsp;</p>
<?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include ('footer.php');?> 