<?php

	include 'koneksi.php';

	mysqli_query($conn, "SELECT * FROM ;");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap -->

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/bootstrap.bundle.min.js"></script>
	
 <!-- Font Awesome -->

	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
	<title>WOWRACK DASHBOARD</title>


<!-- Navigasi -->

</head>
<body> 
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      WOWRACK
    </a>
  </div>
</nav>

<!--Judul-->
<!-- Container -->
 <div class="container">
		<h1 class="mt-5">Dashboard</h1>
		<figure>
		  <blockquote class="blockquote">
		    <p>Image Processing</p>
		  </blockquote>
		  <figcaption class="blockquote-footer">
		    Trash <cite title="Source Title"></cite>
		  </figcaption>
		</figure>

		<a href="kelola.php" type="button" class="mb-4 btn btn-primary">
			<i class="fa fa-plus"></i>
			Tambah Data
		</a>


	<!-- Table Content --> 

		<div class="table-responsive">
  			<table class="table align-middle table-bordered table-hover">

    			<thead>
      				<tr>
				       <th><center>No</center></th>
				       <th>Time-Stamp</th>
				       <th>Image</th>
				       <th>Result</th>
				       <th>Aksi</th>
				     </tr>
				</thead>
				<tbody>
				     <tr>
				       <td><center>1</center></td>
				       <td></td>
				       <td><center>
				       		<img src="img/img1.jpg" style="width: 150px;">
				       	</center>
				       </td>
				       <td>Kosong</td>
				       <td><center>
							
							<!-- Icon sebagai button Trash -->

				       <button type="button" class="mb-4 btn btn-danger">
											<i class="fa fa-trash"></i></button>

				    	 <a href="kelola.php?ubah=1"type="button" class="mb-4 btn btn-success">
											<i class="fa fa-pencil"></i></a>
				       
				       </center>
				     </td>
				     </tr>
				</tbody>
				
				<tbody>
				     <tr>
				       <td><center>2</center></td>
				       <td></td>
				       <td><center>
				       		<img src="img/img2.jpg" style="width: 150px;">
				       	</center>
				       </td>
				       <td>Full</td>
				       <td><center>

				       	<button type="button" class="mb-4 btn btn-danger">
											<i class="fa fa-trash"></i></button>

				    	 <a href="kelola.php?ubah=2" type="button" class="mb-4 btn btn-success">
											<i class="fa fa-pencil"></i></a>

							</center>				
				       </td>
				     </tr>
				</tbody>
			
			</table>
		</div>
</div>


</body>
</html>