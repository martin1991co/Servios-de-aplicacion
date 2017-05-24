<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location:index.php.php");
}
?>
<html>
	<head>
		<title> Eliminar Cuenta de Correo </title>
	</head>
	<body>
		<form method="post" action="eliminarCuentaCorreo.php">
			<table border=1 align=center>
		<?php
			$host="localhost";
			$u="mail";
			$p="anakin";
			$conexion=mysql_connect($host,$u,$p);
			$resultado=mysql_select_db("maildb",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!
			echo "<tr> <td>Correo</td><td>Nombre</td><td>Eliminar</td>";
			$query=mysql_query("select id,name from users where enabled=1");
			//echo "query:".$query."<br>";
			if($query == false){
				echo"Error";
			}
			while ($row=mysql_fetch_array($query)){
				echo '<tr><td>'.$row[0].'</td>';
				echo '<td>'.$row[1].'</td> <td><input type=radio name=del value='.$row[1].'></td></tr>';
			}
			echo"</table>";
		?>	
<input type="submit" value="Eliminar dominio">
	<br>
<a href="dominios.php">Dominios</a>
<br><a href="logout.php">Cerrar Sesion</a>
</body>
</html>
