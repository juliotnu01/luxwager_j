<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<div id="deposito" class="modal fade"  role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="    width: 1324px; position: relative; right: 360px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-info text-center">BANCA</h2>
      </div>
      <div class="modal-body" >
      	<table class="table table-bordered">
      		<thead>
      			<tr>
      				<td>nombre</td>
      				<td>apellido</td>
      				<td>edad</td>
      				<td>codigo de area</td>
      				<td>numero telefono</td>
      				<td>codigo de posito</td>
      				<td>banco</td>
      				<td>numero Cuenta</td>
      				<td>fecha deposito</td>
      				<td>hora deposito</td>
      				<td>monto deposito</td>
      				<td>usuario</td>
      				<td>fecha registro</td>
      				
      			</tr>
      		</thead>
      		<tbody>
      		<tr>
      				<td><?php echo $row['nombre']; ?></td>
      				<td><?php echo $row['apellido']; ?></td>
      				<td><?php echo $row['edad']; ?></td>
      				<td><?php echo $row['codarea']; ?></td>
      				<td><?php echo $row['numtelefono']; ?></td>
      				<td><?php echo $row['coddeposito']; ?></td>
      				<td><?php echo $row['banco']; ?></td>
      				<td><?php echo $row['numCuenta']; ?></td>
      				<td><?php echo $row['fecha']; ?></td>
      				<td><?php echo $row['hora']; ?></td>
      				<td><?php echo $row['montodeposito']; ?></td>
      				<td><?php echo $row['usuario']; ?></td>	
      				<td><?php echo $row['fecharegistro']; ?></td>
      				
      		</tr>
      	</tbody>
      	</table>
      <div class="modal-footer" >
      	<table class="table-bordered pull-right">
      		<thead>
      			<tr>
      				<td>Total Monto Depositado</td>
      			</tr>
      		</thead>
      		<tbody>
      			<tr>
      				<td class="text-danger"><strong> <?php echo $rowdepositos['d']; ?> </strong></td>
      			</tr>
      		</tbody>
      	</table>
      </div>
    </div>
  </div>
</body>
</html>