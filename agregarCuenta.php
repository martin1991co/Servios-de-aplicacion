<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location:index.php.php");
}
?>
<html>
	<head>
		<title> Agregar Cuenta de Correo </title>
	</head>
	<body>
		<table align="center">
			<form method="post" action="agregoMail.php">
			<tr>
				<td>Nombre:</td>
				<td><input type="textbox" name="name"></td>
			</tr>
			<tr>	
				<td>Pass:</td>
				<td> <input type="password" name="pass"></td>
			</tr>
		<TR>
        	<TD colspan="2"><input type="submit" value="Agregar Cuenta"></TD>
			</tr>
	<a href="dominios.php">Dominios</a>
	<br><a href="logout.php">Cerrar Sesion</a>
	</body>
</html>
