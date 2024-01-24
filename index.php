<?php
$data = file_get_contents('pegawai.json');
$pegawai = json_decode ($data, true);
$pegawai = $pegawai ["pegawai"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Absen Pegawai</title>
  </head>
  <body>

  <div class="fixed-top">
	  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
				<div class="container-fluid">
				<a class="navbar-brand" href="#">
					<img src= "logo.png" width="80">
				</a>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
				<!-- <a class="nav-link active" href="#">Home</a> -->
				<!-- <a class="nav-link" href="#">Jam Masuk</a> -->
				<!-- <a class="nav-link" href="#">Jam Keluar</a> -->
				</div>
			</div>
		</div>
	</nav>
</div>
	
	<div class="container">
		<div class="row">
			<div class="col">
				
				</div>
			</div>
			<div class="col">
				<?php foreach ($pegawai as $row) : ?>
					<div class="card mt-4" style="max-width: 600px;">
						<div class="row no-gutters">
							<div class="col-md-4">
								<img src="<?= $row ["gambar"]; ?> ">
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><?= $row ["nama"]; ?></h5>
									<p class="card-text"><?= $row ["NIP"]; ?></p>
								</div>
							</div>
						</div>
					</div>
					
					<?php endforeach; ?>
				</div>
			</div>
				
		</div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
	<script src="JS/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>
