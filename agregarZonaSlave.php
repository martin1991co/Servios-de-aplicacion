<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dns.php");
}
?>
<html>
	<head>
		<title> Agregar Master Zone </title>
	</head>
	<body>
		<table align="center">
			<form method="post" action="agrego.php">
			<tr>
				<td>Nombre de la Zona: </td>
				<td><input type="textbox" name="name"></td>
			</tr>
			<tr>	
				<td>Owner: 
				</td>
				<td>
				<select name="owner">
					<option selected>Seleccione</option>
					<option value='administrador'>Administrador</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Direccion IP Master: 
				</td>
				<td>
				<input type="textbox"  name="ip">
				</select>
				</td>
</tr>
<TR>
	<input type="hidden" name="type" value="slave">

        <TD colspan="2"><input type="submit" value="Agregar Zona"></TD>

			</tr>
	<a href="dominios.php">Dominios</a>
	<br><a href="logout.php">Cerrar Sesion</a>

	<body>
<html>
