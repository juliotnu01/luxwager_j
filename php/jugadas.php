<?php 
	$sqlJugada ="SELECT * FROM jugada;";
   	$jugada = mysqli_query($conexion, $sqlJugada);	
	while ($rowJugada = mysqli_fetch_assoc($jugada)) {

 ?>
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#<?php echo $rowJugada['id'];?>">NBA (<?php echo $rowJugada['equipo_1']; ?> - Vs - <?php echo $rowJugada['equipo_2']; ?>)</a>
        </h4>
      </div>
      <div id="<?php echo $rowJugada['id'];?>" class="panel-collapse collapse">
        <ul class="list-group">
          <table class="table-bordered col-sm-12">
			<thead>
				
			</thead>
			<tbody>
				<tr>
						<td class="text-center">Equipo</td>
						<td class="text-center">moneyline</td>
						<td class="text-center">spread</td>
						<td class="text-center">a/b</td>
						<td class="text-center">ganar1eram</td>
						<td class="text-center">rl1eram</td>
						<td class="text-center">a/b1eram</td>
						<td class="text-center">rl1erc</td>
						<td class="text-center">a/b1erc</td>
						<td class="text-center">rl2doc</td>
						<td class="text-center">a/b2doc</td>
						<td class="text-center">rl3erc</td>
						<td class="text-center">a/b3erc</td>
						<td class="text-center">rl4toc</td>
						<td class="text-center">a/b4toc</td> 
					</tr>
					<td class="text-center"><?php echo $rowJugada['equipo_1']; ?></td> 
					<td class="text-center"><?php echo $rowJugada['dinero_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['spread_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ganar1eram_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl1eram_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab1eram_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl1erc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab1erc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl2doc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab2doc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl3erc_1']; ?></td>
				 	<td class="text-center"><?php echo $rowJugada['ab3erc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl4toc_1']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab4toc_1']; ?></td>
					<tr>
					<td class="text-center"><?php echo $rowJugada['equipo_2']; ?></td> 
					<td class="text-center"><?php echo $rowJugada['dinero_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['spread_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ganar1eram_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl1eram_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab1eram_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl1erc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab1erc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl2doc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab2doc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl3erc_2']; ?></td>
				 	<td class="text-center"><?php echo $rowJugada['ab3erc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['rl4toc_2']; ?></td>
					<td class="text-center"><?php echo $rowJugada['ab4toc_2']; ?></td>  
					</tr>
			</tbody>			
		</table>
        </ul>
        
    </div>
  </div>
  <br>
  <br>
	<?php 
	}

	 ?>