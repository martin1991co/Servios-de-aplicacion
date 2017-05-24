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

$name=$_POST['name'];
$pass=$_POST['pass'];
$mail=$name."@josemorelli.online";
$dir=$name."/";
//echo $mail;
$query="INSERT INTO `users`(id,name,maildir,crypt) VALUES ('$mail','$name','$dir',encrypt('$pass',CONCAT('$5$',MD5(RAND()))))";
echo $query."<br>";
$query2=mysql_query($query);
//echo $query;
if ($query2 == false) {
    echo '<h3>No se pueden ingresar los datos</h3><br><a href="dns.php">Volver a DNS</a>';
}
header("Location: agregarZonaMaster.php");
?>
	</body>
</html>

