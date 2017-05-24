<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location:index.php.php");
}
?>
<html>
	<head>
		<title> Agregar Dominio para Correo </title>
	</head>
	<body>
		<table align="center">
			<form method="post" action="agregoDominioCorreo.php">
			<tr>
				<td>Nombre:</td>
				<td><input type="textbox" name="name"></td>
			</tr>
			<tr>	
				<td>Habilitar:</td>
				<td> Si:<input type=radio name="hab" value="1">No:<input type=radio name="hab" value="0"</td>
			</tr>
		<TR>
        	<TD colspan="2"><input type="submit" value="Agregar Cuenta"></TD>
			</tr>
	<a href="dominios.php">Dominios</a>
	<br><a href="logout.php">Cerrar Sesion</a>
	</body>
</html>
