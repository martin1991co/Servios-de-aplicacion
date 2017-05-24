<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dns.php");
}
?>
<html>
	<head><title>Administracion</title></head>
	<body>
		<table border=1 align=center>
			<tr>
				<td>DNS
				</td>
				<td><a href="http://www.josemorelli.online/roundcube">Webmail</a>
				</td>
			</tr>
			<tr>
				<td><a href="listarZonas.php">Listar Zonas </a><br>
				</td>
				<td><a href="listarCorreos.php">Listar Cuentas de Correo</a><br>
				    <a href="listarDominios.php">Listar Dominios </a>
				</td>
			</tr>
			<tr>
				<td><a href="agregarZonaMaster.php">Agregar Zona Master </a><br>
				</td>
				<td> <a href="agregarCuenta.php">Agregar cuenta de correo</a></td>
				</td>
			</tr>
			<tr>
				<td><a href="agregarZonaSlave.php">Agregar Zona Slave </a><br>
				</td>
				<td><a href="agregarDominio.php">Agregar Dominio</a><br>
				</td>
			</tr>
			<tr>
				<td><a href="eliminarZona.php">Eliminar Zona</a><br>
				</td>
				<td><a href="eliminarCorreo.php">Eliminar correo </a><br>
				<a href="eliminarDominio.php">Eliminar dominio</a><br>
				</td>
			</tr>
		</table>
			<br><a href="logout.php">Cerrar Sesion </a>
	</body>
<html>
