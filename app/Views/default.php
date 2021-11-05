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
								<i class="bi bi-plus-lg btn btn-primary mr-3" onclick="ChangeFormStore()"></i>Tambah Pemilikan
							</div>
							<form action="<?= base_url("ownership/store")?>" method="POST" autocomplete="off" id="formAction" class="form">
							<?= csrf_field(); ?>
								<div class="card-body">
									<div class="form-group">
										<label for="">Nama Kepemilikan *</label>
										<input type="name" class="form-control" id="name" name="name" aria-describedby="" value="">
									</div>
									<div class="form-group">
										<label for="">Jenis Kepemilikan *</label>
										<div class="form-check">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" name="businnes_entity" class="custom-control-input" id="customCheck1">
												<label class="custom-control-label" for="customCheck1" value="" >Badan Usaha</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="individual" id="customCheck2">
												<label class="custom-control-label" for="customCheck2" value="">Perorangan</label>
											</div>
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="customCheck3" name="foundation">
												<label class="custom-control-label" for="customCheck3" value="">Yayasan</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-danger mr-3"><i class="bi bi-arrow-repeat"></i> Reset</button>
										<button type="submit" class="btn btn-primary" id="ButtonAction"> <i class="bi bi-save"></i> Save</button>
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
														<a href="#" class="btn btn-warning btn-sm" onclick="editButton(<?=$key['id']?>)">
															<i class="bi bi-pencil-square"></i>
														</a>
														<a href="<?= base_url("ownership/destroy/$key[id]")?>"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
   	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

	<script>


		function ChangeFormStore() {
			var urlStore = "<?=base_url("ownership/store")?>"
				$('.form').attr('action', urlStore);

				$('#name').val("");
				$('#customCheck1').attr("checked", false)
				$('#customCheck2').attr("checked", false)
				$('#customCheck3').attr("checked", false)
		}
			
		function editButton(id) {
			
			var urlJSON =  "<?= site_url('ownership/edit/')?>"+id

			var urlForm = "<?= site_url('ownership/update/')?>"+id
			$('#formAction').attr('action', urlForm);
		
			$.ajax ({
				url: urlJSON,
				type: 'GET',
				dataType: "JSON",
				success: function(data) {
					
					$('#name').val(data.ownerships.name)

					if (parseInt(data.ownerships.businnes_entity) == 1)  {
						$('#customCheck1').attr("checked", true)	
					}else {
						$('#customCheck1').attr("checked", false)	
					}

					if (parseInt(data.ownerships.individual) == 1)  {
						$('#customCheck2').attr("checked", true)	
					}else {
						$('#customCheck2').attr("checked", false)	
					}

					if (parseInt(data.ownerships.foundation) == 1)  {
						$('#customCheck3').attr("checked", true)	
					}else {
						$('#customCheck3').attr("checked", false)	
					}
					
				},
				error: function(err) {
					console.log(err);
				}

			})
			
		}

	</script>
</body>
</html>