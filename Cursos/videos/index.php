<!doctype html>
<html lang="es" dir="ltr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Documento sin título</title>
 <link rel="stylesheet" href="../../css/bootstrap.min.css">
 <link rel="stylesheet" href="../../style.css">
 <link rel="stylesheet" href="estilos.css">
	</head>
<body>
		<?php
	
	include_once '../../db.php';
class Peliculas extends DB{
     
	 function mostrarPeliculas($num){
		 $array= array();
       $query = $this->connect()->prepare("SELECT * FROM ".$_GET["curso"]." WHERE id= :num");
       $query->execute(['num' => $num]);
       
	
      foreach ($query as $pelicula){
         array_push($array,$pelicula );
      }
     return $array;
 }
	
	function mostrartodos(){
		 $array= array();
       $query = $this->connect()->query("SELECT * FROM ".$_GET["curso"]."");  
	
      foreach ($query as $pelicula){
         array_push($array,$pelicula );
      }
     return $array;
 }
	
	function ultimo(){
	   $array= array();
       $query = $this->connect()->query("SELECT * FROM ".$_GET["curso"]." ORDER BY id DESC LIMIT 1");
       
		foreach($query as $ultimo){
			array_push($array,$ultimo );
		}
		return $array;
	}
}
	
	$llamada = new Peliculas();
	$arreglo=$llamada->mostrarPeliculas($_GET["video"]);
	$arreglo1=$llamada->ultimo();
	$arreglotodos=$llamada->mostrartodos();
	?>
	
<?php 
	session_start();
	if(isset($_SESSION['user'])){
	
	if(isset($_FILES["imagen"])){
		  $tipoArchivo =basename($_FILES["imagen"]["type"]);

		if($tipoArchivo == "jpeg" || $tipoArchivo == "jpg" || $tipoArchivo == "png"){
		if(move_uploaded_file($_FILES['imagen']['tmp_name'], "../../usuario/".$_FILES['imagen']['name'])){
			
			include_once("../../db.php");
				$Imagen= new DB();
			$query = $Imagen->connect()->prepare("UPDATE user SET image=:image WHERE email=:email");
			$query->execute(["image"=>$_FILES['imagen']['name'], "email"=>$_SESSION['user']]);
		}
	}}
		include_once("../../iniciarSession.php");}
	?>
<div id="fondo">
<div class="container py-2">
<div class="row menup align-content-center align-items-center align-self-center d-flex">
 	<span class="icon-menu mr-3" id="menu"></span>
	<img onclick="location.href='../../'" style="cursor:pointer;" class="incono my-auto" src="../../6.png" height="55px">
	<div onclick="location.href='../../'" class="ocultar ml-md-auto">Inicio</div>
	<div class="ocultar ml-3" >About</div>
	<div class="ocultar ml-3">Contactar</div>
	
	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="ocultar ml-3" onclick="location.href='../../CrearCuenta/'">Registrarse</div>
	<div class="ocultar ml-3" onclick="location.href='../../IniciarSession/'">Iniciar session</div>
	<img src="../../usuario.png" alt="" class="usuarioAnonimo text-white" id="">
	
	<?php
	}else{?>
	<div class="cajauser d-flex align-content-center align-self-center align-items-center justify-content-center pl-1  pr-3  py-1" style="background: rgba(0,0,0,40%); border-radius:20px;">
		 <?php if($imagen==""){ ?>
	<img src="../../usuario.png" alt="" class="usuario text-white" >
		<?php }else{?>
		<img src="../../usuario/<?php echo $imagen; ?>" alt="" class="usuario text-white" >
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
	<div onclick="location.href='../../'" class="text-center ">Incion</div>
	<div class="text-center ">About</div>
	<div class="text-center ">Contactar</div>
	</section>
</div>
	
	<?php 	if(!isset($_SESSION['user'])){
	?>
	<div class="container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">
		
		<img src="../../usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">
		
		<div  onclick="location.href='../../CrearCuenta/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Registrarse</div>
		<div onclick="location.href='../../IniciarSession/'" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px;">Iniciar Session</div>
		
		</div></div>
	    <?php }else{ ?>
		<div class="menuUsuario container d-flex align-content-end align-self-end align-items-end justify-content-end"><div id="menuSession" style="display: none;">
		 <?php if($imagen==""){ ?>
			
			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput" required>
            </span>
          <label for="nuestroinput">
		<img src="../../usuario.png" alt="" style="width: 100px; height: 100px; border-radius: 50%;">          </label>
			 </form> 
		 <?php }else{ ?>
			
			 <form id="formImgage" action="#" method="post" enctype="multipart/form-data" autocomplete="off">
			<span class="nuestroinput">
              <input  type="file" name="imagen" id="nuestroinput">
            </span>
          <label for="nuestroinput">
			<img src="../../usuario/<?php echo $imagen; ?>" alt="" style="width: 100px; height: 100px; border-radius: 50%;"></label></form>
			
			 <?php } ?>
			<div  class="mb-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:black; padding:5px; text-transform: capitalize;"><?php echo $nombre." ".$apellido; ?></div>
			
		<div id="cerrar" class="bg-danger my-2" style="border-radius: 5px; width:fit-content; margin: 0 auto; color:white; padding:5px; cursor: pointer;">Cerrar Session</div>
		
		</div></div>
	<?php }?>
	
	<form id="formCerrar" action="" method="post" hidden>
	<input type="text" name="cerrar">
	</form>
	
	
	
	
<div id="imagen-fondo"><img src="../../fon2.jpg" alt="" width="100%" height="100%"><h1 class="text-center"><?php echo $arreglo[0]["nombre"]; ?></h1></div>
	<div id="fondo_gris">
	<center>
    <video src='<?php echo $_GET["curso"]; ?>/parte<?php echo $arreglo[0]["id"]; ?>.mp4'  preload='metadata'  controls width='1000px'>
	</video>
    </center>
		</div>
	<div class="fondo-cursos bg-danger">
		<div id="munu-video">
			<?php if(1!=$_GET["video"]){?>
	<h1 class="py-2 text-white" id="back" style="cursor: pointer;">anterior</h1><?php }else{?>
			<h1 class="py-2 text-white"></h1>
			<?php } ?>
		<span class="icon-menu" id="menu1" style="cursor: pointer;"></span>
		<?php if($arreglo1[0]["id"]!=$_GET["video"]){?>
		<h1 class="py-2 text-white" id="next" style="cursor: pointer;">siguiente</h1><?php }?></div>
			
	</div>
	
	
	
	<div class="d-flex mx-auto" style="width:100%; margin-top:40px;">
			<div class="cursos align-content-center align-self-center align-items-center mx-auto">
			<h1 id="titular" style="margin-bottom:40px; text-align: left; margin-left: 5%;">Videos similares</h1>
			<?php
				$id=$_GET["video"];
				$veses=4;
				while($veses>0){
					if($arreglo1[0]["id"]==$id){
						$id=0;
						include("vista-pelicula.php");
					}else{
						include("vista-pelicula.php");
					}
					
					$veses--;
					$id++;
				}
				?>
		
		</div></div>
	
	
	
	 <div class="container">
	<h1 id="comenta" class="mt-3" style="">Comentarios</h1>
<?php 	if(isset($_SESSION['user'])){
	?>
		<div  class="mt-4 mt-md-5 d-flex" style="">
	    	<?php if($imagen==""){ ?>
	    <img class="imgUser" src="../../usuario.png" alt="">
			<?php }else{ ?>
			<img class="imgUser" src="../../usuario/<?php echo $imagen; ?>" alt="">
			<?php } ?>
			
			
		<div class="ml-3">
			
			<div id="texto" class="mb-3 mt-4"  contenteditable="true" aria-label="Añade un comentario público…"   placeholder="Añade un comentario"></div>
			<div class="d-flex">
				<buttom id="cancelar" class="btn-danger mr-3">Cancelar</buttom>
				<buttom id="guardar" class="btn-danger">Guardar</buttom></div>
			</div>
	    </div>
		 
	</div><?php } ?>
	
    <div id="comentarios" class="container mb-5">
		
	    
		
	</div>
	
	
	
	<form id="siguiente" action="" hidden>
	<input type="text" name="curso" value="<?php echo $_GET["curso"]; ?>">	
    <input type="text" name="video" value="<?php echo $_GET["video"]+1; ?>">
	</form>
	
	<form id="anterior" action="" hidden>
	<input type="text" name="curso" value="<?php echo $_GET["curso"]; ?>">	
    <input type="text" name="video" value="<?php echo $_GET["video"]-1; ?>">
	</form>
	
		<form id="lista" action="../" hidden>
			<input type="text" name="curso" value="<?php echo $_GET["curso"]; ?>">	
	</form>
	<div class="d-flex mx-auto" style="width:100%">
			<div class="cursos align-content-center align-self-center align-items-center mx-auto">
				
	 
		
		</div>
		</div>
	
<script type="text/javascript" src="../../Jquery/jquery-3.4.1.js"></script>
<script type="text/javascript" src="../../js/popper.min.js"></script>
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../../javascript/menu.js"></script>
<script type="text/javascript" src="form.js"></script>
<script type="text/javascript">


	var timerId = false;
		function ajax(){
			
		var video="<?php echo $_GET["video"] ?>";
        var cur="<?php echo $_GET["curso"] ?>";
			
	var datosForm={id:video, curso:cur};
      
		$.post("cometario.php", datosForm, function(e){
			document.getElementById("comentarios").innerHTML = e;
		});
			
 var valor = 0;

    if (!timerId) {
        timerId = setInterval(function(){
            valor = valor + 1;
            ajax();
        }, 1000);
    }
		
}
	
<?php if(isset($_SESSION["user"])){ ?>
	$("#guardar").click(function(){
		
		var textoComentario = document.getElementById("texto").textContent;
		
		
		var email="<?php echo $_SESSION["user"] ?>";
		var name="<?php echo $nombre ?>";
		var ape="<?php echo $apellido ?>";
		var video="<?php echo $_GET["video"] ?>";
        var cur="<?php echo $_GET["curso"] ?>";
		
		var datosFormulario={comentario:textoComentario, gmail:email, nombre:name, apellido:ape, id:video, curso:cur};
    
		$.post("subirComentario.php", datosFormulario,true);
		
		document.getElementById("texto").textContent="";
		 $("#cancelar").hide();
	     $("#guardar").hide();
       
	});<?php } ?>

	
ajax();

	
	</script>
</body>
</html>