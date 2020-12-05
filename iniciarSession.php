<?php 

$nombre;
$apellido;
$imagen;

if(isset($_POST["cerrar"])){
	cerrar();
	
}

function cerrar(){
   session_unset();
   session_destroy();
	header("location:#");
	
}

include_once("db.php");

$basedata = new DB();

$query = $basedata->connect()->prepare("SELECT * FROM user WHERE email=:email");
$query->execute(["email"=>$_SESSION['user']]);

while($lista = $query->fetch(PDO::FETCH_ASSOC)){
	$nombre= $lista["nombre"];
	$apellido= $lista["apellido"];
	$imagen= $lista["image"];
}



?>