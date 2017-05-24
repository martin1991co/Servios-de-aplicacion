<?php
session_start();
?>
<html>
 <HEAD>
  <TITLE> DNS</TITLE>
 </HEAD>

 <BODY>
	<h1 align="center">Administracion de Correo</h1>
	    <br><br><h1 align=center>Ingreso a Webmail:</h1>
	<h3 align=center><a href="http://www.josemorelli.online/roundcube">Roundcube </a></h3><br>
  <FORM METHOD=POST ACTION="loginMail.php">
	<TABLE align="center">
	    <tr><td colspan="2" align="center"><br><h1>Ingrese usuario y pass:</h1><hr width="100%"></td></tr>
	<TR>
		<TD><br>Usuario</TD>
		<TD><br><INPUT TYPE="text" NAME="usuario"></TD>	
	</TR>
	<TR>
		<TD>Pass</TD>
		<TD><INPUT TYPE="password" NAME="clave"></TD>
	</TR>
	<TR>
		<TD colspan="2" align="center"><br><br><INPUT TYPE="submit" value="Aceptar">
		</TD>
	</TR>
	</TABLE>
  </FORM>
<a href="index.php">Home</a>
 </BODY>
</HTML>
