<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dns.php");
}
?>
<html>
	<head>
		<title> Listado de Zonas
		</title>
	</head>
	<body>	
<?php
$host="localhost";
$u="root";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);
$resultado=mysql_select_db("powerdns",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!
echo"	<a href='dominios.php'>Dominios</a>";
echo "<table border=1 align=center>
	<tr> <td>Id</td><td>Name</td><td>Type</td>";
$query=mysql_query("select id,name,type from domains");
//echo "query:".$query."<br>";
if($query == false){
	echo"Error";
}
while ($row=mysql_fetch_array($query)){
echo '<tr><td>'.$row[0].'</td>';
echo '<td>'.$row[1].'</td>';
echo '<td>'.$row[2].'</td></tr>';
}
echo"</table>";

?>	
	<a href="logout.php">Cerrar Sesion</a>
	</body>
</html>
