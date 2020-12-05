<?php

include_once("../db.php");
	
$email=$_POST["email"];
$password=$_POST["password"];




$creaCuenta= new DB();
$errores=false;




$query = $creaCuenta->connect()->prepare("SELECT password AS votos_totales FROM user WHERE email=:email");
$query->execute(["email"=>$email]); 

if($query->rowCount()){
$total = $query->fetch(PDO::FETCH_OBJ)->votos_totales;

  if(password_verify($password, $total)){
     $query = $creaCuenta->connect()->prepare("SELECT * FROM user WHERE email=:email");
	 $query->execute(["email"=>$email]); 
	  
	  while ($fila = $query->fetch(PDO::FETCH_ASSOC)){
		  $datos []= $fila;
	  }
     
	  session_set_cookie_params(60*60*24*1);
     session_start();
     $_SESSION['user'] = $datos[0]["email"];
	  header("location:../");
	  
    }else{
	  echo "<p id='error' style='color:red; text-align: center'>La contraseña no coinciden</p>";
  }
}else{
	
	
	echo "<p id='error' style='color:red; text-align: center'>Este email no existe</p>";
}




?>