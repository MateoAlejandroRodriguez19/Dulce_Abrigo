<?php
require_once "PHP/conexionbd.php";
require "PHP/ClasesClientesAd.php";
extract($_REQUEST);

$objConexion=Conectarse();
$objcliente= new Cliente();

$resultado=$objcliente->consultarcliente();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Ver clientes</title>
</head>
<body>
	<div class="formAñadirQ">
		<h1 align="center" >Ver clientes</h1><br>
		<table border="1px solid white" width="900px;" height="400px;">
			<tr align="center" bgcolor="#204a87" class="tr1">	
				<td width="10%">Idcliente</td>
				<td width="25%">Correo</td>
				<td width="15%">Nombre</td>
				<td width="10%">Telefono</td>
				<td width="10%">Estado</td>
				<td width="30%">Direccion</td>		
			</tr>	
		
	</div>

	<?php
		while ($cliente=$resultado->fetch_object()){
		?>
		
			<tr class="tr2">
				<td width="10%"><?php echo $cliente->cedula ?></td>
				<td width="25%"><?php echo $cliente->correo ?></td>
				<td width="15%"><?php echo $cliente->nombre ?></td>
				<td width="14%"><?php echo $cliente->telefono ?></td>
				<td width="6%"><?php echo $cliente->estado ?></td>
				<td width="30%"><?php echo $cliente->direccion ?></td>
			</tr>
		<?php	
		}
		?>
		</table>
</body>
</html>