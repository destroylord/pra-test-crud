<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pra test ~ PT Folarium Indonesia</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

</head>
<body>

	<div class="container">
		<div class="row justify-content-center" style="margin-top: 100px">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-4">
						<h5>Master Kepemilikan</h5>
						<div class="card">
							<div class="card-header">
								Tambah Pemilikan
							</div>
							<form action="<?= base_url("ownership/store")?>" method="POST" autocomplete="off">
							<?= csrf_field(); ?>
								<div class="card-body">
									<div class="form-group">
										<label for="">Nama Kepemilikan *</label>
										<input type="name" class="form-control" id="" name="name" aria-describedby="">
									</div>
									<div class="form-group">
										<label for="">Jenis Kepemilikan *</label>
										<div class="form-check">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" name="businnes_entity" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1">Badan Usaha</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="individual" id="customCheck2">
												<label class="custom-control-label" for="customCheck2">Perorangan</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck3" name="foundation">
												<label class="custom-control-label" for="customCheck3">Yayasan</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-danger mr-3"><i class="bi bi-arrow-repeat"></i> Reset</button>
										<button type="submit" class="btn btn-primary"> <i class="bi bi-save"></i> Save</button>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-md-8">
							<div class="row">
								<div class="col-md-9">
									<input type="search" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
								</div>
							</div>

							<table class="table table-bordered text-center mt-4">
									<thead class="thead-dark">
										<tr>
											<th rowspan="2">No</th>
											<th rowspan="2">Kepemilikan</th>
											<th colspan="3">Jenis</th>
											<th rowspan="2">Action</th>
										</tr>
										<tr>
											<th>Badan Usaha</th>
											<th>Perorangan</th>
											<th>Yayasan</th>
										</tr>
									</thead>
									<tbody>
											<?php					
												
												$no = 1;
												foreach ($ownershipses as $key ) {?>
												<tr>
													<td> <?= $no++; ?> </td>
													<td><?=$key['name'];?></td>	
													<td><i class="bi bi-<?= ($key['businnes_entity'] == 0) ? "x" : "check" ;?>"></i></td>	
													<td><i class="bi bi-<?= ($key['individual'] == 0) ? "x" : "check" ;?>"></td>	
													<td><i class="bi bi-<?= ($key['foundation'] == 0) ? "x" : "check" ;?>"></td>	
													<td>
														<a href="" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></a>
														<a href="<?= base_url("ownership/destroy/$key[id]")?>"  onclick="return confirm('Are you sure want to delete the data?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
													</td>	
												</tr>
											<?php
												}
											?>
									</tbody>
							</table>
					</div>
				</div>
			</div>
		</div>
	</div>

   	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>