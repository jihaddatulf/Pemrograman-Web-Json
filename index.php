<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	</head>
<body style="background-image:url(background-bg.jpg);background-size:cover">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
		<div class="container">
			<a class=""navbar-brand text-black fw-bold fs-5" href="#">
            <img src="Logo-icon.png" width="35" alt=""></a><b>JIHAD</b>DATULF</a>
		</div>
		</div>
	</nav>
	<div class="col-md-1"></div>
	<div class="col-md-10 well">
		<h3 class="text-"><b>JSON</b>File <small>Silahkan masukkan data anda dengan benar!</small></h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-4">
			<form action="save.php" method="POST">
				<div class="form-group">
					<label>Nama Depan</label>
					<input class="form-control" type="text" name="firstname">
				</div>
				<div class="form-group">
					<label>Nama Belakang</label>
					<input class="form-control" type="text" name="lastname" />
				</div>
				<div class="form-group">
					<label>Alamat</label>
					<input class="form-control" type="text" name="address" />
				</div>
				<button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> SIMPAN</button>
			</form>
		</div>
		<div class="col-md-8">
			<form method="POST" action="create.php">
				<button class="btn btn-success pull-right"><span class="glyphicon glyphicon-export"></span> Create JSON </button>
			</form>
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<td>Nama Depan</td>
						<td>Nama Belakang</td>
						<td>Alamat</td>
						<td>Aksi</td>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						$query = mysqli_query($conn, "SELECT * FROM `member`");
						while($fetch = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['firstname']?></td>
						<td><?php echo $fetch['lastname']?></td>
						<td><?php echo $fetch['address']?></td>
						<td>
							<a style="color:red" href="hapus.php?id=<?= $fetch['mem_id']?>">Hapus</a>
						</td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>