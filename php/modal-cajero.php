<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

<div id="cajero" class="modal fade"  role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-info text-center">CAJERO</h2>
      </div>
      <div class="modal-body" >
        <form method="POST" action="deposito.php ">
          <div class="form-group col-lg-5">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
          </div>
          <div class="form-group col-lg-5">
            <input type="text" name="apellido" class="form-control" placeholder="Apellido Completo" >
          </div>
      	    <div class="form-group col-lg-2">
            <input type="text" name="edad" class="form-control" placeholder="Edad" >
          </div>
          <div class="form-group col-lg-3">
            <input type="text" name="codarea" class="form-control" placeholder="Cod. de Área" >
          </div>
          <div class="form-group col-lg-9">
            <input type="text" name="numtelefono" class="form-control" placeholder="Numero de Telefono" >
          </div>
          <div class="form-group col-lg-4">
            <input type="text" name="coddeposito" class="form-control" placeholder="Cod. de Deposito" >
          </div>
           <div class="form-group col-lg-8">
            <input type="text" name="banco" class="form-control" placeholder="Banco" >
          </div>
          <div class="form-group col-lg-12">
            <input type="text" name="numCuenta" class="form-control" placeholder="Numero de Cuenta" >
          </div>
          <div class="form-group col-lg-6">
            <input type="date" name="fecha" class="form-control">
          </div>
          <div class="form-group col-lg-6">
            <input type="time" name="hora" class="form-control">
          </div>
          <div class="form-group col-lg-12">
            <input type="text" name="montodeposito" class="form-control" placeholder="MONTO DEL DEPOSITO" >
          </div>
          <button type="submit" class="btn btn-success col-lg-6"  >Registrar Deposito</button>
        </form>
        <button type="button" class="btn btn-danger col-lg-6" data-dismiss="modal"  >CANCELAR</button>
      </div>
      <div class="modal-footer" style="    border-top: none;" >
      </div>
    </div>
  </div>
</div>

</body>
</html>