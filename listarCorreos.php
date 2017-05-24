<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: index.php");
}
?>
<html>
	<head><title>Listar Correos</title></head>
	<body>
<?php
$host="localhost";
$u="mail";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);
$resultado=mysql_select_db("maildb",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!
echo "<table border=1 align=center>
	<tr> <td>Correo</td><td>Nombre</td><td>Enabled</td>";
$query=mysql_query("select id,name,enabled from users");
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
	<a href="dominios.php">Dominios</a><br>
	<a href="logout.php">Cerrar Sesion</a>
	</body>
</html>
