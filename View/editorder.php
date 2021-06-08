<?php 
include "../Model/data.php";
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Edit Order</title>
		<meta charset="utf-8">
		<title>Registration Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
            <form method="POST" action="../Controller/proses.php?aksi=update_order">
                    <?php 
                    $no = $_GET['no'];
                    $db = new data();
                    foreach ($db->add_order($no) as $a){
                    ?>

					<h3>Masukkan Pesanan</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Nama *</label>
                            <input type="hidden" class="form-control" name="no" value="<?php echo $a['no'];?>">
							<input type="text" class="form-control" value="<?php echo $a['nama'];?>" name="nama">
						</div>
						<div class="form-wrapper">
							<label for="">Email *</label>
							<input type="text" class="form-control" value="<?php echo $a['email'];?>" name="email">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Alamat *</label>
							<input type="text" class="form-control" value="<?php echo $a['alamat'];?>" name="alamat">
						</div>
						<div class="form-wrapper">
							<label for="">Jumlah *</label>
							<input type="number" class="form-control" value="<?php echo $a['jumlah'];?>" name="jumlah">
						</div>
					</div>
                    <?php } ?>
					<button>
						<span>Edit</span>
					</button>
				</form>
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
