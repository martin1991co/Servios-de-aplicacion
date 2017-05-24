<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dns.php");
}
?>
<html>
	<body>
<?php
$host="localhost";
$u="root";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);
mysql_select_db("powerdns",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!

$name=$_POST['name'];
$owner=$_POST['owner'];
$type=$_POST['type'];

$query=mysql_query("INSERT INTO `domains`(`name`, `type`) VALUES ('$name','$type')");
//echo $query;
if ($query == false) {
    echo '<h3>No se pueden ingresar los datos</h3><br><a href="dns.php">Volver a DNS</a>';
}
header("Location: agregarZonaMaster.php");
?>
	</body>
</html>

