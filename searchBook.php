<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku</title>
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
		  	<h3 class="card-title text-center">Daftar Buku</h3>
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

				<?php 
					include_once "folder/connection/connect.php";
					$nameBook 	= $_GET['nameBook'];
					$queryView 	= "SELECT * FROM `buku` WHERE judul LIKE '%$nameBook%' OR pengarang LIKE '%$nameBook%' OR penerbit LIKE '%$nameBook%' ";
					$excView 	= mysqli_query($connect, $queryView);
					while ($row = mysqli_fetch_assoc($excView)) {
					
				?>
				<!-- Titik While -->
				  <div class="col-sm-3">
				    <div class="card">
				      <div class="card-body">
				        <h5 class="card-title"><?php echo $row['judul'] ?></h5>
				        <img src="asset/image/<?php echo $row['gambar']; ?>" class="card-img-top mb-3" alt="...">
				         <p class="card-text"><b>Pengarang : </b><?php echo $row['pengarang'] ?></p>
				         <p class="card-text"><b>Penerbit : </b><?php echo $row['penerbit'] ?></p>
				        <div class="d-grid gap-2 mx-auto">
				        	<a href="updaterBook.php?id=<?php echo $row['id_buku'] ?>&&tglUpload=<?php echo $row['created_at'] ?>" class="btn btn-warning">Edit</a>
				        	<a href="folder/proses/deleteBook.php?id=<?php echo $row['id_buku'] ?>&&tglUpload=<?php echo $row['created_at'] ?>" class="btn btn-danger">Hapus</a>
				        </div>
				      </div>
				    </div>
				  </div><!-- Batas While -->
				  <?php } ?>
				</div>


		  	</div>
		  </div>
		</div>
	</div>
</div>

</body>
</html>