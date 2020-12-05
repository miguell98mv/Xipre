<!doctype html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Documento sin título</title>
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="scss/estilos.css">
	</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION['user'])){

	if(isset($_FILES["imagen"])){
		  $tipoArchivo =basename($_FILES["imagen"]["type"]);

		if($tipoArchivo == "jpeg" || $tipoArchivo == "jpg" || $tipoArchivo == "png"){
		if(move_uploaded_file($_FILES['imagen']['tmp_name'], "usuario/".$_FILES['imagen']['name'])){

			include_once("db.php");
				$Imagen= new DB();
			$query = $Imagen->connect()->prepare("UPDATE user SET image=:image WHERE email=:email");
			$query->execute(["image"=>$_FILES['imagen']['name'], "email"=>$_SESSION['user']]);
		}
	}}
		include_once("iniciarSession.php");}
	?>
<div id="fondo">
<div class="container py-2">
<div class="row menup align-content-center align-items-center align-self-center d-flex">
 	<span class="icon-menu mr-3" id="menu"></span>
	<img onclick="location.href=''" style="cursor:pointer;" class="incono my-auto" src="6.png" height="55px">
	<div class="ocultar ml-md-auto" onclick="location.href=''">Inicio</div>
	<div class="ocultar ml-3" >About</div>
	<div class="ocultar ml-3">Contactar</div>

	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="ocultar ml-3" onclick="location.href='CrearCuenta/'">Registrarse</div>
	<div class="ocultar ml-3" onclick="location.href='IniciarSession/'">Iniciar session</div>
	<img src="usuario.png" alt="" class="usuarioAnonimo text-white" id="">

	<?php
	}else{?>
	<div class="cajauser d-flex align-content-center align-self-center align-items-center justify-content-center pl-1  pr-3  py-1" style="background: rgba(0,0,0,40%); border-radius:20px;">
		 <?php if($imagen==""){ ?>
	<img src="usuario.png" alt="" class="usuario text-white" >
		<?php }else{?>
		<img src="usuario/<?php echo $imagen; ?>" alt="" class="usuario text-white" >
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
	<div onclick="location.href=''"  class="text-center ">Incion</div>
	<div class="text-center ">About</div>
	<div class="text-center ">Contactar</div>
	</section>
</div>

	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">

		<img src="usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">

		<div  onclick="location.href='CrearCuenta/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Registrarse</div>
		<div onclick="location.href='IniciarSession/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Iniciar Session</div>

		</div></div>
	    <?php }else{ ?>
		<div class="menuUsuario container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">
		 <?php if($imagen==""){ ?>

			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput" required>
            </span>
          <label for="nuestroinput">
		<img src="usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">          </label>
			 </form>
		 <?php }else{ ?>

			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput">
            </span>
          <label for="nuestroinput">
			<img src="usuario/<?php echo $imagen; ?>" alt="" style="width: 100px; height: 100px; border-radius: 50%;"></label></form>

			 <?php } ?>
			<div  class="mb-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:black; padding:5px; text-transform: capitalize;"><?php echo $nombre." ".$apellido; ?></div>

		<div id="cerrar" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px; cursor: pointer;">Cerrar Session</div>

		</div></div>
	<?php }?>

	<form id="formCerrar" action="" method="post" hidden>
	<input type="text" name="cerrar">
	</form>








<div id="imagen-fondo"><img src="fon1.jpeg" alt="" width="100%" height="100%"><h1 class="text-center">Cursos de Programacion</h1><p class="text-center mx-auto">Aprende a programar desde cero con cursos completos </p></div>


	<div class="columna-abuelo container">
	<div class="columna-padre row">


	<div class="columnas col-4 text-center">
		<a href="#" style="text-decoration: none; color:#212529;">
	<img src="encab2.jpg" class="encab mt-5" width="300px" height="250px"  style="border-radius:20px">
		<p class="texto-encab">Curso PHP</p></a>
		</div>

		<div class="columnas col-4 text-center">
			<a href="#" style="text-decoration: none; color:#212529;">
	<img src="encab1.jpg" class="encab mt-5" width="300px" height="250px"  style="border-radius:20px">
			<p class="texto-encab">Diseño Grafico</p></a>
		</div>

			<div class="columnas col-4 text-center">
				<a href="#" style="text-decoration: none; color:#212529;">
	<img src="encab3.jpg" class="encab mt-5" width="300px" height="250px" style="border-radius:20px">
				<p class="texto-encab">Curso de Javascript</p></a>
		</div>
	</div>
	</div>

	<div class="fondo-cursos bg-danger mb-3">
	<h1 class="text-center py-2 text-white">Cursos desde Cero</h1>
	</div>

		<div class="d-flex mx-auto" style="width:100%">
			<div class="cursos align-content-center align-self-center align-items-center mx-auto">

			<a href="Cursos/?curso=php" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center" onclick="aviso()" style="cursor: pointer;"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class="d-inline-block" style="border-radius:50%; background:#300CAC;"><img src="icon/php.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b>PHP Programación para backend</b></h1></div></a>

				<a href="Cursos/?curso=csharp" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class="d-inline-block" style="border-radius:50%; background:#6D30BC;"><img src="icon/c-char.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b> C# programación orientada a objetos</b></h1></div></a>

				<a href="Cursos/?curso=javascript" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class="d-inline-block" style="border-radius:50%; background:#A5AC3C;"><img src="icon/js.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b>JavaScript dale interactividad a tu pagina wed</b></h1></div></a>

				<a href="Cursos/?curso=css" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class=" d-inline-block" style="border-radius:50%; background:#109797;"><img src="icon/css.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b>CSS aprende a diseñar tu pagina wed con estilos css</b></h1></div></a>

				<a href="Cursos/?curso=cmas" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class="d-inline-block" style="border-radius:50%; background:#2A1CA7;"><img src="icon/c++.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b>C++ lenguaje de programación
estructurado</b></h1></div></a>

				<a href="Cursos/?curso=html" style="text-decoration: none; color:#212529;">
			<div class="cursos-cero py-2 align-content-center align-self-center align-items-center"><div id="caja-cursos" class="d-inline-block ml-sm-3"><div class="d-inline-block" style="border-radius:50%; background:#1BC5A8;"><img src="icon/html.jpg" alt="" style="border-radius:50%;"></div></div><h1 class="text-subcursos"><b>HTML lenguaje de etiqueta para el desarollo wed</b></h1></div></a>

		</div></div>


	<div class="d-flex bg-danger" style="width:100%">

			<div class="menu-ultimo align-content-center align-self-center align-items-center mx-auto text-center">
				<h1 class="text-white">Aprende ya!</h1>

				<a href="img/imagen1.jpg" style="text-decoration: none;">
				<div class="d-inline-flex flex-column align-content-center align-self-center align-items-center" style="width:30%"><img style="background-image: url(img/imagen1.jpg);" alt=""><p><b class="text-white d-inline-flex">Mas de 300 horas <br>de contenido</b></p></div></a>

			     <a href="img/imagen2.jpg" style="text-decoration: none;">
				<div class="d-inline-flex flex-column align-content-center align-self-center align-items-center" style="width:30%"><img style="background-image: url(img/imagen2.jpg);" alt=""><p><b class="text-white d-inline-flex">Para personas sin <br>
ningún conocimiento</b></p></div></a>

				<a href="img/imagen3.jpg" style="text-decoration: none;">
				<div class="d-inline-flex flex-column align-content-center align-self-center align-items-center" style="width:30%"><img style="background-image: url(img/imagen3.jpg);" alt=""><p><b class="text-white d-inline-flex">Diseño responsivo <br>multiplataforma</b></p></div></a>
			</div>

		</div>





<script type="text/javascript" src="Jquery\jquery-3.4.1.js"></script>
<script type="text/javascript" src="js\popper.min.js"></script>
<script type="text/javascript" src="js\bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/menu.js"></script>
	<script type="text/javascript">



	</script>
</body>
</html>
