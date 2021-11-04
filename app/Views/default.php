<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pra test ~ PT Folarium Indonesia</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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
							<div class="card-body">
								<div class="form-group">
									<label for="">Nama Kepemilikan *</label>
									<input type="email" class="form-control" id="" aria-describedby="">
								</div>
								<div class="form-group">
									<label for="">Jenis Kepemilikan *</label>
									<div class="form-check">
										<div class="custom-control custom-checkbox">
											<input type="checkbox" name="jenpemilik[]" class="custom-control-input" id="customCheck1">
											<label class="custom-control-label" for="customCheck1">Badan Usaha</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" name="jenpemilik[]" id="customCheck2">
											<label class="custom-control-label" for="customCheck2">Perorangan</label>
										</div>
										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="customCheck3" name="jenpemilik[]">
											<label class="custom-control-label" for="customCheck3">Yayasan</label>
										</div>
									</div>
								</div>
							</div>
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
										<tr>
											<td>1</td>
											<td>Pemerintahan</td>
											<td>ya</td>
											<td>tidak</td>
											<td>ya</td>
											<td>Edit | Hapus</td>
										</tr>
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