<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: dominios.php");
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

$del=$_POST['del'];
$query="delete from domains where id=".$del;
$query2=mysql_query($query);
//echo $query;
if ($query2 == false) {
    echo '<h3>No se pueden ingresar los datos</h3><br><a href="dns.php">Volver a DNS</a>';
}
header("Location: dominios.php");
?>
	</body>
</html>

