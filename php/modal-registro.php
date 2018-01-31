<!DOCTYPE html>
<html>
<head>
	<title>Registrarse</title>
</head>
<body>
<!-- Modal -->
<div id="myModal" class="modal fade"  role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <form method="POST" action="./php/registrarse.php ">
          <div class="form-group">
            <label for="correo">Correo Electronico:</label>
            <input type="text" name="correo" class="form-control" id="correo">
          </div>
          <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <input type="password" name="clave" class="form-control" id="pwd">
          </div>
          <button type="submit" class="btn btn-default">Registrarse</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</body>
</html>