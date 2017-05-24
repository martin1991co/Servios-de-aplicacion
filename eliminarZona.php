<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dns.php");
}
?>
<html>
	<head>
		<title> Eliminar Zonas
		</title>
	</head>
	<body>	
	<form method=post action="eliminoZona.php">
<?php
$host="localhost";
$u="root";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);
$resultado=mysql_select_db("powerdns",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!
echo"	<a href='dominios.php'>Dominios</a>";
echo "<table border=1 align=center>
	<tr> <td>Id</td><td>Name</td><td>Type</td><td>Eliminar</td>";
$query=mysql_query("select id,name,type from domains");
//echo "query:".$query."<br>";
if($query == false){
	echo"Error";
}
while ($row=mysql_fetch_array($query)){
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td>';
echo '<td><input type=radio name=del value='.$row[0].'></td></tr>';
}
echo"</table>";

?>
	<input type=submit value="Eliminar Zona">
	</form>
	<a href="logout.php">Cerrar Sesion</a>
	</body>
</html>
