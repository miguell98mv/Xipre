
<?php
include_once '../db.php';
class Peliculas extends DB{

  private $paginaActual; //La pagina actual donde esta el usuario
  private $totalPaginas; //Total de paginas creadas apartir de los resultados
  private $nResultados;  //El conteo de resultados que arroja nuestra busqueda
  private $resultadosPorPagina; //Guarda el resultado que quiero guardar por paginas
  private $indice; //Guarda el indixe en que va empezar a mostra los poster

  private $error = false;

  public function __construct($nPorPagina){////Guarda el resultado que quiero guardar por paginas

    parent::__construct(); //Funcion de suma importacia ya que al tener un costructor en el la extencion
    //debemos inicializar el constructor primero de la extencion antes que esta

    $this->resultadosPorPagina = $nPorPagina;
    $this->indice =0;
    $this->paginaActual = 1;

    $this->calcularPaginas();
    }


  function calcularPaginas(){

    $query = $this->connect()->query('SELECT COUNT(*) AS total FROM '.$_GET["curso"].'');

    $this->nResultados = $query->fetch(PDO::FETCH_OBJ)->total;
    $this->totalPaginas = $this->nResultados / $this->resultadosPorPagina; //Divide el resultado por pagina que asignamos por el
    //total de resultados que tenemos en la base de datos


    if(isset($_GET['pagina'])){

       if(is_numeric($_GET['pagina'])){
          if($_GET['pagina'] >= 1 && $_GET['pagina'] <= round($this->totalPaginas)){
            $this->paginaActual = $_GET['pagina'];//Pagina en la que estemos
            $this->indice = ($this->paginaActual -1) * ($this->resultadosPorPagina);//Num que vamos a utilizar para mostrar peliculas

          }else{
            echo "No existe esa pagina";
            $this->error = true;
          }

       }else{
         echo "Error al mostrar pagina";
         $this->error = true;
       }
  }


  }


   function mostrarPeliculas(){
     if(!$this->error){

       $query = $this->connect()->prepare("SELECT * FROM ".$_GET["curso"]." LIMIT :pos, :n");
       $query->execute(['pos' => $this->indice, "n" => $this->resultadosPorPagina]);//numero de indice y le desimos que recorra 4 posiciones

      foreach ($query as $pelicula){
        include "vista-pelicula.php";//Se agregan las imagenes
      }
     }
   }


    function mostrarPaginas(){
     $actual = "";
     $paginacion=0;
     $max=0;
   $this->totalPaginas=round($this->totalPaginas);
     $paginacion=$this->paginaActual-3; $max=$this->paginaActual+2;

     if($this->paginaActual==2){
      $paginacion=0;
      $max=$this->paginaActual+3;

      if($this->paginaActual+1 == $this->totalPaginas){
        $paginacion=0;
        $max=$this->paginaActual+1;
      }

      if($this->paginaActual==round($this->totalPaginas)){
        $paginacion=0;
        $max=$this->paginaActual;
      }

      if($max>round($this->totalPaginas)){
     $max=$this->paginaActual+2;
      }
    }else if($this->paginaActual==1){
      $paginacion=0;
      $max=$this->paginaActual+4;
      if($this->paginaActual+2 == $this->totalPaginas){
        $paginacion=0;
        $max=$this->paginaActual+2;
      }
      if($this->paginaActual+1 == $this->totalPaginas){
        $paginacion=0;
        $max=$this->paginaActual+1;
      }

      if($max>round($this->totalPaginas)){
     $max=$this->paginaActual+3;
      }
      if($this->paginaActual==round($this->totalPaginas)){
        $max=1;
      }
    }else if($this->paginaActual==round($this->totalPaginas)){
      $paginacion=$this->paginaActual-5;
      $max=$this->totalPaginas;
      if($this->totalPaginas > $max){
        $paginacion=0;
        $max=$this->paginaActual;
      }

      if($this->paginaActual==4){
     $paginacion=$this->paginaActual-4;
   }else  if($this->paginaActual==3){
     $paginacion=$this->paginaActual-3;
   }else if($max<1){
       $paginacion=$this->paginaActual-4;
      }
    }else if($this->paginaActual==round($this->totalPaginas)-1){
      $paginacion=$this->paginaActual-4;
      $max=$this->totalPaginas;

      if($paginacion<0){
     $paginacion=$this->paginaActual-3;
      }
    }


     echo "<ul>";

     for($i=$paginacion; $i < $max; $i++){
       if(($i+1) == $this->paginaActual){
         $actual='class="actual"';
       }else{
         $actual="";
       }

      echo '<li><a '.$actual.' href="?curso='.$_GET["curso"].'&pagina='.($i+1).'">'.($i + 1).'</a></li>';
     }
     echo "</ul>";
   }

}
?>
