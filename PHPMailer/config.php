<?php

/*
*
* Endeos, Working for You
* blog.endeos.com
*
*/

require_once('PHPMailerAutoload.php');


$mailSMTP = new PHPMailer;

//$mail->SMTPDebug    = 3;

$mailSMTP->IsSMTP();
$mailSMTP->Host = 'smtp.zoho.com';   /*Servidor SMTP*/                                                                        
$mailSMTP->SMTPSecure = 'TLS';   /*Protocolo SSL o TLS*/
$mailSMTP->Port = 587;   /*Puerto de conexión al servidor SMTP*/
$mailSMTP->SMTPAuth = true;   /*Para habilitar o deshabilitar la autenticación*/
$mailSMTP->Username = 'noreply@habitainmobiliaria.com';   /*Usuario, normalmente el correo electrónico*/
$mailSMTP->Password = 'Aw3j%t∞hnje49d';   /*Tu contraseña*/
$mailSMTP->From = 'noreply@habitainmobiliaria.com';   /*Correo electrónico que estamos autenticando*/
$mailSMTP->FromName = 'Habita Inmobiliaria';   /*Puedes poner tu nombre, el de tu empresa, nombre de tu web, etc.*/
$mailSMTP->CharSet = 'UTF-8';   /*Codificación del mensaje*/

?> 