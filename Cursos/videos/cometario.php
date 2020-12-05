<?php 


include_once("../../db.php");
	
$Comentario = new DB();

$query = $Comentario->connect()->query("SELECT * FROM comentarios WHERE curso='".$_POST["curso"]."' AND id='".$_POST["id"]."'ORDER BY fecha DESC LIMIT 4");

if($query->rowCount()){

	while($fila = $query->fetch(PDO::FETCH_ASSOC)){
    $image0 = $Comentario->connect()->query("SELECT image AS nombre_image FROM user WHERE email='".$fila["email"]."'");
		
	$nombreImagen = $image0->fetch(PDO::FETCH_OBJ)->nombre_image;

?>
		
       <div id="comentaMargin" class="mt-2 mt-md-3 d-flex" style="; padding-bottom: 10px;">
		   <?php if($nombreImagen!=""){?>
	    <img class="imgUser" src="../../usuario/<?php echo $nombreImagen; ?>" alt="">
		   <?php }else{?>
		   <img class="imgUser" src="../../usuario.png; ?>" alt="">
		   <?php }?>
		<div class="ml-3 justify-content-center align-content-center align-self-center align-items-center" style="border-bottom: 2px solid rgba(0,0,0,10%); "><p class="m-0" style=""><b><?php echo $fila["nombre"]." ".$fila["apellido"]; ?></b></p><p id="userComenta" class="m-0" style="color:#8D8D8D;"><b><?php echo $fila["comentario"]; ?></b></p></div>
	    </div>


<?php }}?>