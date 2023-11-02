<!DOCTYPE html>
<html lang="en">
<head>
	<title>Malasngoding.com - membuat barcode Dengan PHP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container mt-3">
		<center><h2>Malasngoding.com -  Membuat Barcode Dengan PHP</h2></center>
		<br>
		<form action="" method="GET">
			<div class="mb-3 mt-3">				
				<input type="text" class="form-control"  placeholder="Kode Barcode" name="kode" required>
			</div>  
			<center>
				<button type="submit" class="btn btn-primary">GENERATE</button>
			</center>
		</form>
		<br>
		<?php 
		if(isset($_GET['kode'])){

			$kode_barcode =str_replace(' ', '_', $_GET['kode']);			
			$protocol = stripos($_SERVER['SERVER_PROTOCOL'], 'https') === 0 ? 'https://' : 'http://';
			$file_gambar = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/barcode.php?text=" . $kode_barcode . "&print=true&size=65"; 				    
			?>
			<center><img src="<?php echo $file_gambar; ?>"></center>
			<?php
		}
		?>
	</div>
</body>
</html>