// JavaScript Document

$(document).ready(function(){
	
	
	$("#menu").click(function(){
		$("section").slideToggle();
	});
	
	$( window ).resize(function() {
		$("section").slideUp();
		$("#menuSession").hide();
	});
	

	
		$(".usuarioAnonimo").click(function(){
			$("#menuSession").fadeToggle(300);
		});
	
		$(".cajauser").click(function(){
			$("#menuSession").fadeToggle(300);
		});
	
	 $("#cerrar").click(function(){
		  $("#formCerrar").submit();
	  });
	
		document.addEventListener('input', function(){
			if($("#nuestroinput").val()){
				$("#formImgage").submit();
			}
		});
	
		document.addEventListener("input", function(){
		var a = document.getElementById("texto");
		
	   if(a.textContent!=""){
		  $("#cancelar").show();
		   $("#guardar").show();
		  }else{
			  $("#cancelar").hide();
			  $("#guardar").hide();
		  }
	});
	
	$("#cancelar").click(function(){
		document.getElementById("texto").textContent="";
		 $("#cancelar").hide();
	     $("#guardar").hide();
	});
});


	  function aviso(){
		  $("#form_php").submit();	  
    }

  function iniciarSession(){
	  $("#iniciarSession").submit();
  }