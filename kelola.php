-<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/bootstrap.bundle.min.js"></script>
	
	<!--Font Awesome-->
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

	<title>Dashboard</title>
</head>
<body>
<nav class="navbar navbar-light bg-light mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h1>WOWRACK<h1>
    </a>
  </div>
</nav>


<div class="container">
  <form method="POST" action="proses.php">
    <div class="mb-3">
      <label for="formFile" class="form-label">Input Image</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <div class="col">
    <?php
      if(isset($_GET['ubah'])) {
    ?>
      <button type="submit" name="aksi" value="edit" class="btn btn-primary" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Simpan Perubahan</button>
    <?php
      } else {
    ?>
      <button type="submit" name="aksi" value="add" class="btn btn-primary" ><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan </button>
    <?php
      } 
    ?>
      <a href="index.php" type="button" class="btn btn-danger"><i class="fa fa-reply" aria-hidden="true"></i> Cancel</a>

  </form>
</div>

<h2><center>or</center></h2>



</body>
</html> 
 