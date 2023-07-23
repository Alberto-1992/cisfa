<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="iconos/js/all.min.js"></script>
    <link rel="stylesheet" href="iconos/css/all.min.css">
    <link rel="stylesheet" href="iconos/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>

</head>

<body>
    <?php
    function formatMoney($number, $cents = 1) { // cents: 0=never, 1=if needed, 2=always
        if (is_numeric($number)) { // a number
          if (!$number) { // zero
            $money = ($cents == 2 ? '0.00' : '0'); // output zero
          } else { // value
            if (floor($number) == $number) { // whole number
              $money = number_format($number, ($cents == 2 ? 2 : 0)); // format
            } else { // cents
              $money = number_format(round($number, 2), ($cents == 0 ? 0 : 2)); // format
            } // integer or decimal
          } // value
          return '$'.$money;
        } // numeric
      } // formatMoney
require "conexion.php";
error_reporting(0);
$val = $_POST['ID_usuario'];
$sql = "SELECT COUNT(*) total, PROVEEDOR, GRUPO, fechaContrato FROM listamedicamento where PROVEEDOR = '$val' and DEMANDA = 'FARMACIA INTRAHOSPITALARIA' ";
$result = mysqli_query($conexion2, $sql);
    $fila = mysqli_fetch_assoc($result);

$tabla="";
$query="SELECT * FROM consolidados where PROVEEDOR = '$val' and DEMANDA = 'FARMACIA INTRAHOSPITALARIA'  group by consolidados.ID_CONSOLIDADA asc ";


//En caso de fallo en consulta probar con esta opcion
//$buscarAlumnos=mysqli_query($conexion2,$query);
//if (mysqli_num_rows($buscarAlumnos)>0)

$buscarAlumnos=mysqli_query($conexion2,$query);
if(!empty($buscarAlumnos) AND mysqli_num_rows($buscarAlumnos)>0)
{
	$tabla.= 
	
    '
<table id="ghatable"  class="table table-striped table-darkgray table-hover"  cellspacing="0" width="100%"  >
        
           <tr class="#" style="background-color:#7C7C7C; color: white; font-style: italic; ">
			
            <th scope="col">Grupo</th>
            <th scope="col">N° de contrato</th>
            <th scope="col">Fecha de formalización</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Demanda</th>
            <th scope="col">Clave HRAEI</th>
            <th scope="col">CNIS</th>
            <th scope="col">CUCOP</th>
            <th scope="col">Descripción</th>
            <th scope="col">Presentación</th>
            <th scope="col">UDM</th>
            <th scope="col">Minimo</th>
            <th scope="col">Maximo</th>
            <th scope="col">Solicitado por CISFA</th>
            <th scope="col">Precio unitario</th>
            <th scope="col">Importe minimo</th>
            <th scope="col">Importe maximo</th>
            <th scope="col">Origen del bien</th>
            <th scope="col">Nombre del fabricante</th>
            <th scope="col">N° de registro sanitario</th>
   
			
        </tr>';
		//include("funciones/funcionEliminaRegistr.php");
	//	include("funciones/guardaCandidato.php");
		
while($filaAlumnos= $buscarAlumnos->fetch_assoc())
	{
	
	$clave = base64_encode($filaAlumnos['id_medicamento']);
		
		$tabla.=
        '  
     
        <tr>

            <td>'.$filaAlumnos['GRUPO'].'</td>
            <td>'.$filaAlumnos['NUMERODECONTRATO'].'</td>
            <td>'.$filaAlumnos['FECHADEFORMALIZACION'].'</td>
            <td>'.$filaAlumnos['PROVEEDOR'].'</td>
            <td>'.$filaAlumnos['DEMANDA'].'</td>
            <td>'.$filaAlumnos['CLAVEHRAEI'].'</td>
            <td>'.$filaAlumnos['CNIS2'].'</td>
            <td>'.$filaAlumnos['CUCOP'].'</td>
            <td>'.$filaAlumnos['DESCRIPCIONDELBIEN'].'</td>
            <td>'.$filaAlumnos['PRESENTACION'].'</td>
            <td>'.$filaAlumnos['UNIDADDEMEDIDA'].'</td>
            <td>'.$filaAlumnos['CANTIDADMINIMA'].'</td>
            <td>'.$filaAlumnos['CANTIDADMAXIMA'].'</td>
            <td>'.$filaAlumnos['CANTIDADSOLICITADAPORCISFA'].'</td>
            <td>'.formatMoney($filaAlumnos['PRECIOUNITARIO']).'</td>
            <td>'.formatMoney($filaAlumnos['IMPORTEMINIMO']).'</td>
            <td>'.formatMoney($filaAlumnos['IMPORTEMAXIMO']).'</td>
            <td>'.$filaAlumnos['ORIGENDELBIEN'].'</td>
            <td>'.$filaAlumnos['NOMBREDELFABRICANTE'].'</td>
            <td>'.$filaAlumnos['NOUMERODEREGISTROSANITARIO'].'</td>
			
		
			
			</tr>
      
         
        ';
		
		
	}

	$tabla.='</table>';
	$conexion2->close();
} else
	{
		$tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
	}


echo $tabla;

?>
    <script type="text/javascript">
        $("button").click(function () {
            let fired_button = $(this).val();
            let mensaje = confirm(
            "¡El medicamento se eliminara de la base de datos! ¿Desea continuar?");

            if (mensaje == true) {
                window.location.href = "frontend/eliminaMedicamento.php?id_medicamento=" + fired_button;
            } else {
                swal("Proceso cancelado", " ", "error");
            }
        });
    </script>

</body>

</html>