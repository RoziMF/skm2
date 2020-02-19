<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Survei Kepuasan Masyarakat</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
	

	
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Profil Responden</h2>
                      <form action="tambah.php" method="POST">
						
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="gender" required>
                                    <option value="">Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="usia" required>
								<option value = "">Usia</option>
								<option value = "15-20">15-20</option>
								<option value = "21-30">21-30</option>
								<option value = "31-40">31-40</option>
								<option value = "41-50">41-50</option>
								<option value = "50">50</option>
								</select>
                                <div class="select-dropdown"></div>
                            </div>
						</div>
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                               <select name= "pend" required>
								<option value = "">Pendidikan Terakhir</option>
								<option value = "SD/SMP/SMA">SD/SMP/SMA</option>
								<option value = "Diploma">Diploma</option>
								<option value = "S1">S1</option>
								<option value = "S2/S3">S2/S3</option>
								</select>
                                <div class="select-dropdown"></div>
                            </div>
						</div>
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                               <select name = "pekerjaan" required>
								<option value = "">Pekerjaan Utama</option>
								<option value = "Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
								<option value = "PNS/TNI/Polri">PNS/TNI/Polri</option>
								<option value = "Wiraswasta">Wiraswasta</option>
								<option value = "Lain-lain">Lain-lain</option>
								</select>
                                <div class="select-dropdown"></div>
                            </div>
						</div>
						<div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                               <select name = "layanan" required>
								<option value = "">Jenis Pelayanan yang diterima</option>
								<option value = "Pelayanan Tilang">Pelayanan Tilang</option>
								<option value = "Layanan Antar Barang Bukti">Layanan Antar Barang Bukti</option>
								<option value = "Layanan Pengaduan Masyarakat">Layanan Pengaduan Masyarakat</option>
								<option value = "Koordinasi Penanganan Perkara">Koordinasi Penanganan Perkara</option>
								<option value = "Pelayanan Hukum">Pelayanan Hukum</option>
								<option value = "Lain-lain">Lain-lain</option>
								</select>
                                <div class="select-dropdown"></div>
                            </div>
						</div>
						 <div class="p-t-10">
							 <br>
							 <br>
							 <center>
                            <button class="btn btn--pill btn--green" type="submit" value="Daftar" name="daftar">Selanjutnya</button>
                             <!-- <input type="submit" value="Daftar" name="daftar" /> -->
							 </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>