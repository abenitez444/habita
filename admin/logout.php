<?php
session_start();
session_destroy();
unset($_SESSION['miusuario']);
header("location:index.html");
?>