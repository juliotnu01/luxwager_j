<?php 
	
	while ($row = mysqli_fetch_assoc($jugadas)) {

 ?>
  
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#<?php echo $row['id']; ?>">NBA (<?php echo $row['equipo_1']; ?> - Vs - <?php echo $row['equipo_2']; ?>)</a>
        </h4>
      </div>
      <div id="<?php echo $row['id']; ?>" class="panel-collapse collapse">
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
					<td class="text-center"><?php echo $row['equipo_1']; ?></td> 
					<td class="text-center"><?php echo $row['dinero_1']; ?></td>
					<td class="text-center"><?php echo $row['spread_1']; ?></td>
					<td class="text-center"><?php echo $row['ab_1']; ?></td>
					<td class="text-center"><?php echo $row['ganar1eram_1']; ?></td>
					<td class="text-center"><?php echo $row['rl1eram_1']; ?></td>
					<td class="text-center"><?php echo $row['ab1eram_1']; ?></td>
					<td class="text-center"><?php echo $row['rl1erc_1']; ?></td>
					<td class="text-center"><?php echo $row['ab1erc_1']; ?></td>
					<td class="text-center"><?php echo $row['rl2doc_1']; ?></td>
					<td class="text-center"><?php echo $row['ab2doc_1']; ?></td>
					<td class="text-center"><?php echo $row['rl3erc_1']; ?></td>
				 	<td class="text-center"><?php echo $row['ab3erc_1']; ?></td>
					<td class="text-center"><?php echo $row['rl4toc_1']; ?></td>
					<td class="text-center"><?php echo $row['ab4toc_1']; ?></td>
					<tr>
					<td class="text-center"><?php echo $row['equipo_2']; ?></td> 
					<td class="text-center"><?php echo $row['dinero_2']; ?></td>
					<td class="text-center"><?php echo $row['spread_2']; ?></td>
					<td class="text-center"><?php echo $row['ab_2']; ?></td>
					<td class="text-center"><?php echo $row['ganar1eram_2']; ?></td>
					<td class="text-center"><?php echo $row['rl1eram_2']; ?></td>
					<td class="text-center"><?php echo $row['ab1eram_2']; ?></td>
					<td class="text-center"><?php echo $row['rl1erc_2']; ?></td>
					<td class="text-center"><?php echo $row['ab1erc_2']; ?></td>
					<td class="text-center"><?php echo $row['rl2doc_2']; ?></td>
					<td class="text-center"><?php echo $row['ab2doc_2']; ?></td>
					<td class="text-center"><?php echo $row['rl3erc_2']; ?></td>
				 	<td class="text-center"><?php echo $row['ab3erc_2']; ?></td>
					<td class="text-center"><?php echo $row['rl4toc_2']; ?></td>
					<td class="text-center"><?php echo $row['ab4toc_2']; ?></td>  
					</tr>
			</tbody>			
		</table>
        </ul>
    	<br>
    </div>
  </div>
  <br>
  <br>
	<?php 
	}

	 ?>