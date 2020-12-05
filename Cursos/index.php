<!doctype html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Documento sin título</title>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
 <link rel="stylesheet" href="../style.css">
 <link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="paginacion.css">
	</head>
<body>

	<?php
	session_start();
	if(isset($_SESSION['user'])){

	if(isset($_FILES["imagen"])){
		  $tipoArchivo =basename($_FILES["imagen"]["type"]);

		if($tipoArchivo == "jpeg" || $tipoArchivo == "jpg" || $tipoArchivo == "png"){
		if(move_uploaded_file($_FILES['imagen']['tmp_name'], "../usuario/".$_FILES['imagen']['name'])){

			include_once("../db.php");
				$Imagen= new DB();
			$query = $Imagen->connect()->prepare("UPDATE user SET image=:image WHERE email=:email");
			$query->execute(["image"=>$_FILES['imagen']['name'], "email"=>$_SESSION['user']]);
		}
	}}
		include_once("../iniciarSession.php");}
	?>
<div id="fondo">
<div class="container py-2">
<div class="row menup align-content-center align-items-center align-self-center d-flex">
 	<span class="icon-menu mr-3" id="menu"></span>
	<img onclick="location.href='../'" style="cursor:pointer;" class="incono my-auto" src="../6.png" height="55px">
	<div  onclick="location.href='../'" style="cursor:pointer;" class="ocultar ml-md-auto">Inicio</div>
	<div class="ocultar ml-3" >About</div>
	<div class="ocultar ml-3">Contactar</div>

	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="ocultar ml-3" onclick="location.href='../CrearCuenta/'">Registrarse</div>
	<div class="ocultar ml-3" onclick="location.href='../IniciarSession/'">Iniciar session</div>
	<img src="../usuario.png" alt="" class="usuarioAnonimo text-white" id="">

	<?php
	}else{?>
	<div class="cajauser d-flex align-content-center align-self-center align-items-center justify-content-center pl-1  pr-3  py-1" style="background: rgba(0,0,0,40%); border-radius:20px;">
		 <?php if($imagen==""){ ?>
	<img src="../usuario.png" alt="" class="usuario text-white" >
		<?php }else{?>
		<img src="../usuario/<?php echo $imagen; ?>" alt="" class="usuario text-white" >
		<?php } ?>
		<div id="nombreApellido">
		<p class="m-0 ml-1 tex-white"><?php echo $nombre; ?></p>
		<p class="m-0 ml-1"><?php echo $apellido; ?></p>
		</div>
	</div>
	<?php
	} ?>

</div>
</div>
	<section id="caja">
	<div onclick="location.href='../'"  class="text-center ">Incion</div>
	<div class="text-center ">About</div>
	<div class="text-center ">Contactar</div>
	</section>
</div>

	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">

		<img src="../usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">

		<div  onclick="location.href='../CrearCuenta/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Registrarse</div>
		<div onclick="location.href='../IniciarSession/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Iniciar Session</div>

		</div></div>
	    <?php }else{ ?>
		<div class="menuUsuario container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">
		 <?php if($imagen==""){ ?>

			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput" required>
            </span>
          <label for="nuestroinput">
		<img src="../usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">          </label>
			 </form>
		 <?php }else{ ?>

			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput">
            </span>
          <label for="nuestroinput">
			<img src="../usuario/<?php echo $imagen; ?>" alt="" style="width: 100px; height: 100px; border-radius: 50%;"></label></form>

			 <?php } ?>
			<div  class="mb-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:black; padding:5px; text-transform: capitalize;"><?php echo $nombre." ".$apellido; ?></div>

		<div id="cerrar" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px; cursor: pointer;">Cerrar Session</div>

		</div></div>
	<?php }?>

	<form id="formCerrar" action="" method="post" hidden>
	<input type="text" name="cerrar">
	</form>





<div id="imagen-fondo"><img src="../fon2.jpg" alt="" width="100%" height="100%"><h1 class="text-center text-uppercase">curso
  <?php  if($_GET["curso"]=="csharp"){
	echo "c#";
}else if($_GET["curso"]=="cmas"){
	echo "c++";
}else{echo $_GET["curso"]; } ?></h1>

	<?php  if($_GET["curso"]=="php"){ ?>
	<p class="text-center mx-auto">Potente lenguaje de programación, con un gran soporte y de código abierto, lo que lo hace ideal para cualquier proyecto web que necesite de mostrar datos de forma dinámica</p>
	<?php }else if($_GET["curso"]=="csharp"){ ?>

	<p class="text-center mx-auto">
	Es un Lenguaje de Programación para crear aplicaciones de escritorio robustas y para integrarlo con otras tecnologías, entornos de desarrollo y lenguajes de programación</p>
	<?php }else if($_GET["curso"]=="javascript"){ ?>

	<p class="text-center mx-auto">
	Permitiendo crear efectos atractivos y dinámicos en las páginas web. Los navegadores modernos interpretan el código JavaScript integrado en las páginas web</p>
	<?php }else if($_GET["curso"]=="css"){ ?>

		<p class="text-center mx-auto">
	CSS es un mecanismo complementario del lenguaje HTML que permite indicarle al navegador el estilo que debe darle a los distintos elementos al desplegar la información de un sitio web</p>
	<?php }else if($_GET["curso"]=="cmas"){ ?>

	<p class="text-center mx-auto">
	Es un lenguaje muy utilizado en programas de alta complejidad como de diseño gráfico, 3D, en juegos antiguos y actuales, para crear motores gráficos, y otros; debido a su enorme capacidad</p>
	<?php }else if($_GET["curso"]=="html"){ ?>
	<p class="text-center mx-auto">
	HTML es un lenguaje de marcado descriptivo que se escribe en forma de etiquetas para definir la estructura de una página web y su contenido como texto, imágenes</p>
	<?php } ?>


	</div>
	<div class="fondo-cursos bg-danger mb-3">
	<h1 class="text-center py-2 text-white text-lowercase">Videos 	<?php  if($_GET["curso"]=="csharp"){
	echo "c#";
}else if($_GET["curso"]=="cmas"){
	echo "c++";
}else{echo $_GET["curso"]; } ?></h1>
	</div>



	<div class="d-flex mx-auto" style="width:100%">
			<div class="cursos align-content-center align-self-center align-items-center mx-auto">



			    <?php
				 include_once 'peliculas.php';
      $peliculas = new Peliculas(8);
      $peliculas->mostrarPeliculas();

      ?>


		</div></div>


    <div class="container">

          <div id="paginas">
          <center>
          <?php

             $peliculas->mostrarPaginas();

           ?></center>
        </div>

    </div>

<script type="text/javascript" src="../Jquery/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../js/popper.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../javascript/menu.js"></script>
<script type="text/javascript">


</script>
</body>
</html>
