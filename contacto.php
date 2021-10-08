<?php include("header.php");?>
<?php
$categoria = $_REQUEST[categoria];
include('social_media.php');

?>
<script type="text/javascript">
<!--
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe de contener una direccion de correo.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('Se presentaron errores en el envio del formulario:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>

  <table width="100%" border="0">
  <tr>
    <td width="79%" height="40" bgcolor="#AC4843" class="propiedades"><strong>Contacto</strong></td>
    <td width="6%" align="center" valign="middle"><a href="<?php echo $facebook?>" target="_blank"><img src="png/facebook.png" alt="Facebook" width="25" height="25" border="0"/></a></td>
    <td width="5%" align="center" valign="middle"><a href="<?php echo $twitter?>" target="_blank"><img src="png/twitter.png" alt="Twitter" width="25" height="25" border="0"/></a></td>
    <td width="10%" align="center" valign="middle"><a href="<?php echo $youtube?>" target="_blank"><img src="png/youtube.png" alt="YouTube" width="63" height="25" border="0"/></a></td>
  </tr>
</table>
  <table width="100%" border="0" cellpadding="10">
    <tr>
    <td width="253" colspan="4" valign="top">
      <div style="float:right;width:45%;">
        <?php
		/*
     $sql5="SELECT * FROM cat WHERE cat_id='2'";
 $result5 = mysql_query($sql5,$db);
 $myrow = mysql_fetch_array($result5);
 $desc = $myrow["cat_desc"];
 echo $desc;
 */
?>
      </div>
      <div style="float:left;width:45%;"><form action="contactar.php" method="post">
              <table width="100%" border="0" align="center" cellpadding="5" cellspacing="5" class="tableleft">
                <tr>
                  <td width="24%" valign="top"><p>Nombre: <span style="color: #FF0000">*</span></p></td>
                  <td width="43%" valign="top">
                    <div align="right">
                      <input name="nombre" type="text" class="regform" id="nombre" size="30">                    
                  </div></td>
                </tr>
                <tr>
                  <td valign="top"><p>Email:  <span style="color: #FF0000">*</span></p></td>
                  <td valign="top"><div align="right">
                    <input name="email" type="text" class="regform" id="email" size="30">
                  </div>                    <label> </label></td>
                </tr>
                <tr>
                  <td valign="top"><p>Tel&eacute;fono: <span style="color: #FF0000">*</span></p></td>
                  <td valign="top"><div align="right">
                    <input name="telefono" type="text" class="regform" id="telefono" size="30">
                  </div></td>
                </tr>
                <tr>
                  <td valign="top"><p>Empresa:</p></td>
                  <td valign="top"><div align="right">
                    <input name="empresa" type="text" class="regform" id="empresa" size="30">
                  </div></td>
                </tr>
                <tr>
                  <td valign="top"><p>Comentarios:</p></td>
            <td valign="top"><label>
                    <div align="right">
                      <textarea name="comentarios" style="width:100%;" rows="5" id="comentarios" class="regformarea"></textarea>
                </div>
            </label></td>
                </tr>
                
                <tr>
                  <td colspan="3" valign="top"><p style="font-style: italic; color: #FF0000">* Campos obligatorios</p></td>
                </tr>
                <tr>
                  <td colspan="3"><div align="right">
                    <div align="right">
                      <input name="Submit2" type="submit" class="btnlogin" id="Submit" onclick="MM_validateForm('nombre','','R','email','','RisEmail','telefono','','R');return document.MM_returnValue" value="Enviar">
                    </div>
                  </div></td>
                </tr>
              </table>
   </form>&nbsp;</div></td>
    <td width="166" align="center" valign="top">
    <?php include ("banner.php"); ?>    </td>
    </tr>
  </table>
<?php include("footer.php");?>
