<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	<script src="scripts/mandacurp.js"></script>

</head>
<body>
	

<?php
error_reporting(0);
 $ID_usuario = $_POST['ID_usuario'];

require '../conexion.php';

$sql_u = $conexion2->query("SELECT * FROM datosproveedor WHERE id_datoProveedor ='$ID_usuario'");

$row_u = mysqli_fetch_assoc($sql_u);


?>
<input type="hidden" id="id" value="<?php echo $row_u['id_datoProveedor']; ?>">
<strong><h3> Datos del proveedor </h3></strong>
<form method="POST" action="redirect-update-contrato">
<strong>Numero de proveedor</strong>
							 <div class="input-group">
								
								 <input name="id_proveedor" id="numeroContrato" type="text" class="form-control"
									value="<?php echo $row_u['id_datoProveedor']; ?>" readonly>
							 </div>

							 <strong>Datos del proveedor</strong>
							 <div class="input-group">
								 
								 <textarea rows="2" name="datopersonalproveedor" id="numeroContrato" type="text" class="form-control"
									readonly><?php echo $row_u['datoPersonalProveedor'];?></textarea>
							 </div>
							 <strong>Domicilio</strong>
							 <div class="input-group">
								
								 <textarea rows="4" name="domiciliopersonal" id="numeroContrato" type="text" class="form-control"
									readonly><?php echo $row_u['domicilioPersonal']; ?></textarea>
							 </div>
							 <strong>Telefono</strong>
							 <div class="input-group">
								 
								 <input name="telefono" id="numeroContrato" type="text" class="form-control"
									value="<?php echo $row_u['telefono']; ?>" readonly>
							 </div>
							 <strong>Correo electronico</strong>
							 <div class="input-group">
								
								 <input name="correo" id="numeroContrato" type="text" class="form-control"
									value="<?php echo $row_u['correoElectronico']; ?>" readonly>
							 </div>
							 
							 <strong>TIPO DE CONTRATO</strong>
							 <div class="input-group">
								
								 <select name="tipocontrato" class="form-control" readonly>
									<option value="intrahospitalaria 2023" selected>Intrahospitalaria 2023</option>
								</select>
							 </div>
							 <strong>NUMERO DE PEDIDO</strong>
							 <div class="input-group">
								
								 <input name="numeroContrato" id="numeroContrato" type="text" class="form-control">
							 </div>
							 <strong>RFC</strong>
							 <div class="input-group">
								
								<input name="rfc" type="text" class="form-control" readonly="readonly" value="<?php echo $row_u['rfc']; ?>" >
							 </div>
							 <strong>N° de procedimiento</strong>
							 <div class="input-group">
								
								 <input name="procedimiento" type="text" class="form-control">
							 </div>
	 
							 <strong>DIRECCIÓN DE INTERNET</strong>
							 <div class="input-group">
								
								 <input name="direccion_internet" type="text" class="form-control" readonly="readonly" value="<?php echo $row_u['direccionInternet']; ?>">
							 </div>
	 
							 <strong>SUFICIENCIA PRESUPUESTARIA</strong>
							 <div class="input-group">
								
								 <input name="suficiencia_presupuestaria" type="text" class="form-control" value="-" readonly>
							 </div>
	 
							 <strong>REQUISICIÓN</strong>
							 <div class="input-group">
								
								 <input name="requisicion" type="text" class="form-control" value="-" readonly>
							 </div>
	 
							 <strong>PARTIDA PRESUPUESTARIA</strong>
							 <div class="input-group">
								
								 <input name="partida_presupuestaria" type="text" class="form-control" value="25301" readonly>
							 </div>
	 
							 <strong>FECHA DE FIRMA</strong>
							 <div class="input-group">
								
								 <input name="fecha_firma" type="date" class="form-control" value="2023-01-01" readonly>
							 </div>
	 
							 <strong>VIGENCIA DEL PEDIDO, FECHA DE INICIO</strong>
							 <div class="input-group">
								
								 <input name="vigencia_pedido_inicio" type="date" class="form-control" value="2023-01-01" readonly>
							 </div>
	 
							 <strong>VIGENCIA DEL PEDIDO, FECHA DE TERMINO</strong>
							 <div class="input-group">
								
								 <input name="vigencia_pedido_termino" type="date" class="form-control" value="2023-12-31" readonly>
							 </div><br>
	 <!--
				 <div class="card">
							 <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Monto</h3>
							 <div class="card-body">
							   <div id="table" class="table-editable">
								 <span class="table-add float-right mb-3 mr-2"><a href="#" class="text-success"><i
									   class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
								 <table class="table table-bordered table-responsive-md table-striped text-center">
								   <thead>
									 <tr>
									   <th class="text-center"></th>
									   <th class="text-center">Minimo</th>
									   <th class="text-center">Maximo</th>
									   
									 </tr>
								   </thead>
								   <tbody>
									 <tr>
										 <th class="text-center">SUBTOTAL</th>
										 <td><input type="text" name="sub_min" readonly value="<?php echo $row_u['sub_minimo']; ?>"></td>
										 <td><input type="text" name="sub_max"  readonly value="<?php echo $row_u['sub_maximo']; ?>"></td>
									 </tr>
									<tr> 
									 <th class="text-center">I.V.A</th>
									 <td><input type="text" name="iva_min" readonly value="0%" readonly></td>
									 <td><input type="text" name="iva_max" readonly value="0%" readonly></td>
									</tr>  
									   <tr><th class="text-center">TOTAL</th>
									 <td><input type="text" name="total_min" readonly value="<?php echo $row_u['total_minimo']; ?>"></td>
									 <td><input type="text" name="total_max" readonly value="<?php echo $row_u['total_maximo']; ?>"></td>
									 </tr>
									   
									 </tr>
								   </tbody>
								 </table>
							   </div>-->
							   <input type="submit" name="editar" class="btn btn-info" style="float: left;" value="Continuar">
							   
							 
							 </div>
							 
						   </div></center>
						  
	 
	 </form>
<input type="submit" class="btn btn-danger" style="float: left; margin-left: 10px;" value="Cancelar" onClick="location.reload(false);">
</body>
</html>