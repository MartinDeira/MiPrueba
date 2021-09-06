<?php include_once ("authconfig.php"); 

$leyo_pol =  $_GET['pol'];

?>
<html>
<head>
<title>UAI - Servidor de Aplicaciones</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
</head>

<BODY BGCOLOR="#FFFFFF" TEXT="#000000" LINK="#0000FF" VLINK="#000080" ALINK="#FF0000">

<H1 ALIGN="CENTER">
<IMG SRC="members/img/escudo.gif" ALT="">
<H3 ALIGN="CENTER">Ministerio de Economía<br><HR>
<H1 ALIGN="CENTER">Sistema CODA<br>

<HR>
<center>

  <DIV ALIGN="CENTER">
     
  </DIV>


<form name="Sample" method="post" action="<?php print $resultpage ?>">
  <table width="40%" border="1" cellpadding="0" cellspacing="0" bordercolor="#000000">
    <tr> 
      <td colspan="2" bgcolor="#000066" valign="middle"> 
        <div align="center"><font color="#FFFFCC"><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><b>Ingrese sus Datos</b></font></div>
    </td>
  </tr>
    <tr> 
      <td width="35%" bgcolor="#0099CC" valign="middle"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;Usuario</font></b></td>
      <td width="65%" bgcolor="#0099CC" valign="middle"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        &nbsp;
<input type="text" name="username" size="15" maxlength="15">
        </font></b></td>
  </tr>
    <tr> 
      <td width="35%" bgcolor="#0099CC" valign="middle"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;Clave</font></b></td>
      <td width="65%" bgcolor="#0099CC" valign="middle"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="2"> 
        &nbsp;
<input type="password" name="password" size="15" maxlength="15">
        </font></b></td>
  </tr>
    <tr valign="middle" bgcolor="#0099CC"> 
      <td colspan="2"> 
        <div align="center">
	   <input type="checkbox" name="politica" value="si" checked> He leído la Política de la Calidad de la UAI<br>
          <input type="submit" name="Login" value="Ingresar">
	
          
        </div>
      </td>
  </tr>
</table>
</form>
<?
if ($leyo_pol == 'no') { 

	print "<i><font color='red'><font face='Verdana, Arial, Helvetica, sans-serif' size='2'>Para ingresar debe leer la Política de la Calidad de la UAI</font></i>";
	print "<br><br>";

}
?>
<table width="75%" border="0" cellpadding="0" cellspacing="0" bordercolor="#000000">
  <tr> 
    <td bgcolor="#FFFFFF" valign="middle"> 
       <div align="center"><font color="#0099CC"><font face="Verdana, Arial, Helvetica, sans-serif" size="4"><b>POLITICA DE LA CALIDAD DE LA UAI</b></font></div><br>
    </td>
  </tr>
  <tr> 
    <td bgcolor="#0099CC" valign="middle"> 
       <div align="center"><font color="#FFFFFF"><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><b><br>La Unidad de Auditoría Interna implementa y sostiene un Sistema de Gestión de la Calidad de acuerdo a los requisitos del Referencial IRAM SIGEN N° 13 segunda edición 2017, con el fin de cumplir y satisfacer las necesidades del Ministro de Economía y de las áreas auditadas, propiciando un mejor ambiente de control interno.
Este sistema promueve una gestión basada en procesos, orientada a la mejora continua y gestionando el uso racional de los recursos necesarios para lograr un adecuado ambiente de trabajo.
Asimismo, fomenta el desarrollo y actualización de las competencias de las personas que integran la UAI, facilitando su participación en la mejora continua del Sistema de Gestión de la Calidad, asegurando la eficacia y eficiencia del control y mejorando la utilización de las herramientas y el tratamiento de la información disponible.</b></font></div><br>
    </td>
  </tr>

</table>


<p>&nbsp;</p>

</body>
</html>
