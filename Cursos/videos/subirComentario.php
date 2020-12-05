<?php 

include_once("../../db.php");

 $_POST["apellido"];
$_POST["comentario"];
$_POST["curso"];
$_POST["gmail"];
$_POST["id"];
$_POST["nombre"];
	

$subirComentario = new DB();

$query = $subirComentario->connect()->prepare("INSERT INTO comentarios (curso,id,email,nombre,apellido,comentario) VALUES (:curso,:id,:email,:nombre,:apellido,:comentario)");

$query->execute(["curso"=>$_POST["curso"], "id"=>$_POST["id"], "email"=>$_POST["gmail"], "nombre"=>$_POST["nombre"], "apellido"=>$_POST["apellido"], "comentario"=>$_POST["comentario"]]);

?>