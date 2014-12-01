<!DOCTYPE html>
<html>
	<head>
		<title>Rest CURD</title>
	</head>
	<body>
		<?php
			$jumlahRest = $listres->num_rows();
			?>
				<a href="<?= base_url() ?>index.php/res/addrest">ad Rest</a>
			<?php
				if($jumlahRest > 0){
					?>
				<h1>rest list<h1>
					<table border="1">
						<thead>
							<tr>
							  <th>data 1:</th>
							  <th>data 2:</th>
							  <th>data 3:</th>
							  <th>data 4:</th>
							</tr>
						</thead>
							<tbody>
								<?php 
									$i = 0;
									foreach($liastres->result() as $row){
									?>
									<tr>
										<td><?= $i ?></td>
										<td><?= $row->restId ?></td>
										<td><?= $row->resName ?></td>
										<td><?= $row->resyangada ?></td>
										<td>
											<a href="<?=base_url() ?>res/addrest/<?= $row->restId ?>">Update</a>
											<a href="<?=base_url() ?>res/deleteresDB/<?= $row->restId ?>">Delete</a>
										</td>
									</tr>
									<?php
									}
									?>
							</tbody>
					</table>
			<?php
			}
			?>
	</body>
</html>