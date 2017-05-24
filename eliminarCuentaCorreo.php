<?php
session_start();
if($_SESSION['login']!=1) {
	header("Location: index.php");
}
?>
<html>
	<body>
<?php
$host="localhost";
$u="mail";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);
mysql_select_db("maildb",$conexion);          //ELEGIR LA BASE DE DATOS!!!!!!!!

$del=$_POST['del'];
//echo $mail;
$query="update users set enabled=0 where name='".$del."'";
echo $query."<br>";
$query2=mysql_query($query);
//echo $query;
if ($query2 == false) {
    echo '<h3>No se pueden ingresar los datos</h3><br><a href="index.php">Volver a DNS</a>';
}
//header("Location: dominios.php");
?>
	</body>
</html>

