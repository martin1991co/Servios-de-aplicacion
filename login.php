<?php
$host="localhost";
$u="root";
$p="anakin";
$conexion=mysql_connect($host,$u,$p);

mysql_select_db("powerdns",$conexion);

$pass=md5($_POST['clave']);
//echo "pass: ".$pass;
$consulta="select * from users where username='{$_POST['usuario']}' and password='$pass'"; //USUARIO, CLAVE
//echo $consulta;
$consultaResultado=mysql_query($consulta,$conexion);
//echo "<br>consResu".$consultaResultado."<br>";
if(mysql_num_rows($consultaResultado)>0) {
	session_start();
	$_SESSION['login']=1;
	$fila=mysql_fetch_array($consultaResultado);
	mysql_close($conexion);
	$_SESSION['username']=$fila['username'];	
	header("Location: dominios.php");
}
else {
	unset($_SESSION['login']);
	header("Location: index.php");
}

?>
