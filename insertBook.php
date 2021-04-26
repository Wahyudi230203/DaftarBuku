<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </div>
    </div>
  </div>
</nav>
<!-- End Navbar -->
<div class="container">
	<div class="row">
		<div class="card">
		  <div class="card-body">
		  	<h3 class="card-title text-center">Tambah Buku</h3>
		  	<div class="col-lg-12">
		  		<div class="navbar navbar-light bg-light">
				  <div class="container-fluid">
				  	<a href="insertBook.php">
				  	<button class="btn btn-primary">+ Tambah</button>
				    </a>
				    <form class="d-flex" action="searchBook.php">
				      <input class="form-control me-2" type="search" name="nameBook" placeholder="Search" aria-label="Search">
				      <button class="btn btn-outline-success" type="submit">Search</button>
				    </form>
				  </div>
				</div><!-- Button -->
				<div class="row">
				<form action="folder/proses/prosesInsert.php" method="post" enctype="multipart/form-data">
					<table cellpadding="10"> 
						<tr>
							<td width="20%">
								<div class="row">
									<div class="col-lg-12">
									<div class="card">
										<div class="card-body">
										<img id="output" class="img-thumbnail" />
										<input type="file" name="gambar" accept="image/*" onchange="loadFile(event)">
										</div>
									</div>
									</div>
								</div>
							</td>
							<td>
								<div class="row">
									<div class="col-lg-12">
									<div class="card">
										<div class="card-body">
										<table class="table">
											<tr>
												<td><b>Judul Buku</b></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="judul" placeholder="Judul Buku" required></td>
											</tr>
											<tr>
												<td><b>Pengarang Buku</b></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="pengarang" placeholder="Pengarang Buku" required></td>
											</tr>
											<tr>
												<td><b>Penerbit Buku</b></td>
											</tr>
											<tr>
												<td><input type="text" class="form-control" name="penerbit" placeholder="Penerbit Buku" required></td>
											</tr>
										</table>
										</div>
									</div>
									</div>
								</div>
							</td>
						</tr>
					</table>
					<button class="btn btn-info">Simpan</button>
				</form>
				  
				</div>


		  	</div>
		  </div>
		</div>
	</div>
</div>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</body>
</html>