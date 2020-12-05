<?php

include_once("../db.php");
	
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$password=$_POST["password"];
$confirma=$_POST["confirma"];
$hash=password_hash($password, PASSWORD_DEFAULT, ["cost" =>10]);
$creaCuenta= new DB();
$errores=false;

$query = $creaCuenta->connect()->prepare("SELECT * FROM user WHERE email=:email");
$query->execute(["email"=>$email]); 

if($query->rowCount()){
	echo "<p id='error' style='color:red; text-align: center'>Ya hay un usuario con este email</p>";
	$errores=true;
}

if($password!=$confirma){
	echo "<p id='error' style='color:red; text-align: center'>La contraseña no coinciden</p>";
	$errores=true;
}

if($errores==true){return false;}
	
$query = $creaCuenta->connect()->prepare("INSERT INTO user(email,password,nombre,apellido) VALUES (:email,:password,:nombre,:apellido)");

if($query->execute(["email"=>$email,"password"=>$hash,"nombre"=>$nombre,"apellido"=>$apellido])){
	echo "<p id='error' style='color:#009846; text-align: center'>Su cuenta se creo con exito espere un momento...</p>";
	header("Refresh: 5, url=../IniciarSession/");
}
?>