<?php
session_start();
?>
<html>
 <HEAD>
  <TITLE> Serv Ap. y Monitoreo</TITLE>
 </HEAD>

 <BODY>
	<h1 align="center">Final de Servicios de Aplicacion y Monitoreo</h1>
  <FORM METHOD=POST ACTION="login.php">
	<TABLE align="center">
	    <tr><td colspan="2" align="center"><br><br><h1>Ingrese usuario y pass:</h1><hr width="100%"></td></tr>
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
 </BODY>
</HTML>
