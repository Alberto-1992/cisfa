<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/styles.css?=1">
    <link href="css/main.css?n=1" rel="stylesheet">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="icono/icono.ico" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>HRAEI</title>

    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   
    <script src="control_usuario.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap-theme.min.css">

    <script type="text/javascript" src="librerias/bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="librerias/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="scripts/listarMedicamento.js"></script>
    <script src="scripts/selectContratoFg.js"></script>
    <script src="scripts/medicamentos.js"></script>
    <script src="scripts/medicamentoEnOrden.js"></script>
    <script src="scripts/salidasCisfa.js"></script>
    <script src="scripts/entradasCisfa.js"></script>
    <script src="scripts/cancelarOrdenOsFG.js"></script>
    <script src="scripts/mult.js"></script>
    <script src="scripts/consultaFG.js"></script>
    <script src="scripts/cerrarMenu.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>



    <script>
        function opener() {
            nwin = window.open("", "newWin", "toolbar=no,location= no,resizable=no",
                width = 200, height = 200, left = 100, top = 100)
        }
        /*
       $(document).ready(function() {    
  
        //Añadimos la imagen de carga en el contenedor
        $('#tabla_resultado').html('<div id="tabla_resultado" style="position: fixed; top: 0px; left: 0px; width: 100%; height: 100%; z-index: 9999;  opacity: .8; background: url(imagenes/loader.gif) 50% 50% no-repeat rgb(249,249,249);"><br/>Un momento, por favor...</div>');
 
        
        return false;
                
});
 */      
    </script>

</head>

<body>

    <?php 
            
			if (isset($_SESSION['usuarioFG'])){
				$usernameSesion = $_SESSION['usuarioFG'];
				require 'conexion.php';
				$query = $conexion2->query("SELECT nombre_trabajador from login where correo_electronico = '$usernameSesion' limit 1");
                    $rw = mysqli_fetch_assoc($query);
			
			}
    ?>

<header style="background: #00BDFA;">


        <strong id="cabecera" style="color: white; float: left; margin-left: 42%; font-size: 18px;">FARMACIA GRATUITA</strong>

        <script>
        
		//	window.onload = function(){killerSession();}
		//	function killerSession(){
		//	setTimeout("window.open('confirmCloseSession.php','_top');", 2.4e+6);
		//	}
</script>
<script type="text/javascript">


$('.nav-item dropdown').hover(function(){
	$('#navbarDropdown').trigger('click')

})

</script>

    </header>
<div class="box2">
    <div class="box1">
    <?php
        require 'menuCisfa/menuFG.php';
    ?>
    </div>
        <div class="box03">
        <!-- <div class="imagenCisfa" style="margin-top: -34px; border-radius: 25px; height: 94px;"></div>
        <div id="tabla_resultados" style="font-size: 12px;"></div>-->
            <div id="tabla_resultado" style="font-size: 12px;">
    
            </div>
        
<style>

::-webkit-scrollbar{
    width: 10px;
}
::-webkit-scrollbar-track{
    background: #ACAEAD;
    border-radius: 50px;
}
::-webkit-scrollbar-thumb{
    background: #fff;
    border-radius: 50px;
}
</style>
    </div>
    </div>



        <script src="frontend/js/script.js"></script>

</body>
</html>
<?php
require 'modals/contratosFG.php';
require 'modals/cargarContratoFG.php';
require 'modals/registrarProveedor.php';
require 'modals/salidasCisfa.php';
require 'modals/cancelarOrdenSuministroFG.php';
require 'modals/entradasCisfa.php';
require 'modals/editarOrdenFG.php';
?>


