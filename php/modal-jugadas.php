<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div id="jugada" class="modal fade"  role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title text-info text-center">JUGADAS</h2>
      </div>
      <div class="modal-body" >
      	<form method="POST" action="registrarJugada.php">
      		<table class="tablet">
      			<td class="col-lg-4">
          	<div class="form-group col-lg-">
            	<input type="text" name="equipo_1" class="form-control" placeholder="Equipo">
          	</div>
      		<div class="form-group col-lg-">
            	<input type="text" name="dinero_1" class="form-control"  placeholder="M.Line">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="spread_1" class="form-control" placeholder="spread">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab_1" class="form-control" placeholder="a/b">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ganar1eram_1" class="form-control" placeholder="ganar1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl1eram_1" class="form-control" placeholder="rl1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab1eram_1" class="form-control" placeholder="a/b1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl1erc_1" class="form-control" placeholder="rl1erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab1erc_1" class="form-control" placeholder="a/b1erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl2doc_1" class="form-control" placeholder="rl2doc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab2doc_1" class="form-control" placeholder="a/b2doc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl3erc_1" class="form-control" placeholder="rl3erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab3erc_1" class="form-control" placeholder="a/b3erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl4toc_1" class="form-control" placeholder="rl4toc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab4toc_1" class="form-control" placeholder="a/b4toc">
          	</div>
          	</td>
          	<td class="col-lg-4">
          		<h1 class="text-center">VS</h1>
          	</td>
          	<td class="col-lg-4">
          		<div class="form-group col-lg-">
            	<input type="text" name="equipo_2" class="form-control" placeholder="Equipo">
          	</div>
          		<div class="form-group col-lg-">
            	<input type="text" name="dinero_2" class="form-control" value="<?php echo $row['dinero_2']; ?>" placeholder="M.Line">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="spread_2" class="form-control" placeholder="spread">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab_2" class="form-control" placeholder="a/b">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ganar1eram_2" class="form-control" placeholder="ganar1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl1eram_2" class="form-control" placeholder="rl1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab1eram_2" class="form-control" placeholder="a/b1eram">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl1erc_2" class="form-control" placeholder="rl1erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab1erc_2" class="form-control" placeholder="a/b1erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl2doc_2" class="form-control" placeholder="rl2doc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab2doc_2" class="form-control" placeholder="a/b2doc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl3erc_2" class="form-control" placeholder="rl3erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab3erc_2" class="form-control" placeholder="a/b3erc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="rl4toc_2" class="form-control" placeholder="rl4toc">
          	</div>
          	<div class="form-group col-lg-">
            	<input type="text" name="ab4toc_2" class="form-control" placeholder="a/b4toc">
          	</div>
          	</td>
          	</table>
          	
          
      </div>
      <div class="modal-footer" >
      		<div class="form-group col-lg-12">
            	<input type="submit" class="form-control" value="REGISTRAR JUGADA">
          	</div>
      	</form>
      </div>
    </div>
  </div>
</div>

</body>
</html>