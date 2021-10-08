<?php
session_start(); 

//if (session_is_registered(miusuario)){
if (isset($_SESSION['miusuario'])) {
include ('header.php');?>
        <h1>Bienvenido Administrador</h1>     
<ul>
      <div style="clear:both;"></div>
      <div style="clear:both;"></div>
    </ul>

            <div style="clear:both;"></div>
      <ul>
          <li style="font-size: 14px">
	          <p style="font-weight: bold; font-size: 14px">Gesti&oacute;n de propiedades</p>
              <a href="categorias.php" class="square3"><img src="images/iconos/folder.png" alt="clientes" width="16" height="16" border="0" /> Gestionar categorias</a></li>
	        <span style="font-size: 14px"><a href="subcategorias.php" class="square3"><img src="images/iconos/page_copy.png" alt="clientes" width="16" height="16" border="0" /> Gestionar subcategorias</a></span><span style="font-size: 14px"><a href="propiedades.php" class="square3"><img src="images/iconos/building.png" alt="servicios" width="16" height="16" border="0" /> Gestionar propiedades</a></span>
            <div style="clear:both;"></div>
        </ul> 
        <div style="clear:both;"></div>
      <div style="clear:both;"></div>
<ul>
          <li style="font-size: 14px">
	          <p style="font-weight: bold; font-size: 14px">Gesti&oacute;n de contenido</p>
              <a href="cat.php?cat_id=1" class="square3"><img src="images/iconos/pencil.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar Misi&oacute;n</a><a href="banner_mod.php?banner_id=1" class="square3"><img src="images/iconos/bullet_picture.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar banner lateral</a><a href="cat.php?cat_id=2" class="square3"><img src="images/iconos/bullet_purple.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar Contacto</a>
              <a href="catp.php?cat_id=3" class="square3"><img src="images/iconos/bullet_blue.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar URL Twitter</a><a href="catp.php?cat_id=4" class="square3"><img src="images/iconos/bullet_blue.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar URL Facebook</a><a href="catp.php?cat_id=5" class="square3"><img src="images/iconos/bullet_blue.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar URL YouTube</a><a href="catp.php?cat_id=6" class="square3"><img src="images/iconos/email_add.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar cuenta de email por default</a>
              <div style="clear:both;"></div>
          </ul>        
    <ul><div style="clear:both;"></div>
    </ul>

<ul>
          <li style="font-size: 14px">
	          <p style="font-weight: bold; font-size: 14px">Herramientas del sistema</p>
            <a href="usuarios2.php" class="square3"><img src="images/iconos/bullet_key.png" alt="proyectos" width="16" height="16" border="0" /> Gestionar usuarios del sistema</a>
          
</ul>        
    <ul>
      <div style="clear:both;"></div>
      <div style="clear:both;"></div>
    </ul>

 <?php } else {
    // header("location:loginerror.php");
    header("location:index.html");
 } ?><?php include 'footer.php'; ?>
