<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      font-weight: 400;
      }
      h4 {
      margin: 15px 0 4px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      .email {
      display: block;
      width: 45%;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      th, td {
      width: 15%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 16%;
      text-align: left;
      }
      table {
      width: 100%;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      th, td {
      word-break: keep-all;
      }
      }
    </style>
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
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                       <div class="testbox">
      <form action="tambah.php" method="POST">
        <h3>Kuesioner Survei Kepuasan Masyarakat</h3>
        <hr />
		  <br>
        <h4>Pendapat Responden Tentang Pelayanan</h4>
		  </br>
        <table>
          <tr>
			<th class="first-col">1. Persyaratan</th>
            <th>Sangat Sesuai</th>
            <th>Sesuai</th>
            <th>Kurang Sesuai</th>
            <th>Tidak Sesuai</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya?</td>
            <td><input type="radio" value="4" name="persyaratan" required /></td>
            <td><input type="radio" value="3" name="persyaratan" required /></td>
            <td><input type="radio" value="2" name="persyaratan" required /></td>
            <td><input type="radio" value="1" name="persyaratan" required /></td>
          </tr>
			<tr>
			<th class="first-col">2.Sistem, Mekanisme & Prosedur</th>
            <th>Sangat Mudah</th>
            <th>Mudah</th>
            <th>Kurang Mudah</th>
            <th>Tidak Mudah</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan diunit ini?</td>
            <td><input type="radio" value="4" name="sistem" required /></td>
            <td><input type="radio" value="3" name="sistem" required /></td>
            <td><input type="radio" value="2" name="sistem" required /></td>
            <td><input type="radio" value="1" name="sistem" required /></td>
          </tr>
			<tr>
			<th class="first-col">3. Waktu Penyelesaian</th>
            <th>Sangat Cepat</th>
            <th>Cepat</th>
            <th>kurang Cepat</th>
            <th>Tidak Cepat</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan?</td>
            <td><input type="radio" value="4" name="waktu" required /></td>
            <td><input type="radio" value="3" name="waktu" required /></td>
            <td><input type="radio" value="2" name="waktu" required /></td>
            <td><input type="radio" value="1" name="waktu" required /></td>
          </tr>
			<tr>
            <th class="first-col">4. Biaya/Tarif</th>
            <th>Gratis</th>
            <th>Murah</th>
            <th>Cukup Mahal</th>
            <th>Sangat Mahal</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara apakah dikenakan biaya/tarif terhadap layanan diunit ini?</td>
            <td><input type="radio" value="4" name="biaya" required /></td>
            <td><input type="radio" value="3" name="biaya" required /></td>
            <td><input type="radio" value="2" name="biaya" required /></td>
            <td><input type="radio" value="1" name="biaya" required /></td>
          </tr>
			<tr>
            <th class="first-col">5. Produk Spesifikasi<br>Jenis Layanan</th>
            <th>Sangat Sesuai</th>
            <th>Sesuai</th>
            <th>Kurang Sesuai</th>
            <th>Tidak Sesuai</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang kesesuaian produk layanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan?</td>
            <td><input type="radio" value="4" name="produk" required /></td>
            <td><input type="radio" value="3" name="produk" required /></td>
            <td><input type="radio" value="2" name="produk" required /></td>
            <td><input type="radio" value="1" name="produk" required /></td>
          </tr>
			<tr>
            <th class="first-col">6. Kompetensi Pelaksana</th>
            <th>Sangat Kompeten</th>
            <th>Kompeten</th>
            <th>Kurang Kompeten</th>
            <th>Tidak Kompeten</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan?</td>
            <td><input type="radio" value="4" name="kompetensi" required /></td>
            <td><input type="radio" value="3" name="kompetensi" required /></td>
            <td><input type="radio" value="2" name="kompetensi" required /></td>
            <td><input type="radio" value="1" name="kompetensi" required /></td>
          </tr>
		  <tr>
            <th class="first-col">7. Perilaku Pelaksana</th>
            <th>Sangat Sopan & Ramah</th>
            <th>Sopan & Ramah</th>
            <th>Kurang Sopan & Ramah</th>
            <th>Tidak Sopan & Ramah</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan?</td>
            <td><input type="radio" value="4" name="perilaku" required /></td>
            <td><input type="radio" value="3" name="perilaku" required /></td>
            <td><input type="radio" value="2" name="perilaku" required /></td>
            <td><input type="radio" value="1" name="perilaku" required /></td>
          </tr>
			<tr>
            <th class="first-col">8. Penanganan<br>Pengaduan</th>
            <th>Dikelola dengan Baik</th>
            <th>Berfungsi Tapi Kurang Maksimal</th>
            <th>Ada Tapi Tidak Berfungsi</th>
            <th>Tidak ada</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang Penanganan pengaduan pengguna layanan?</td>
            <td><input type="radio" value="4" name="penanganan" required /></td>
            <td><input type="radio" value="3" name="penanganan" required /></td>
            <td><input type="radio" value="2" name="penanganan" required /></td>
            <td><input type="radio" value="1" name="penanganan" required /></td>
          </tr>
			<tr>
            <th class="first-col">9. Sarana & Prasarana</th>
            <th>Sangat Baik</th>
            <th>Baik</th>
            <th>Cukup</th>
            <th>Buruk</th>
          </tr>
          <tr>
            <td class="first-col">Bagaimana pendapat saudara tentang kualitas sarana dan prasarana?</td>
            <td><input type="radio" value="4" name="sarana" required /></td>
            <td><input type="radio" value="3" name="sarana" required /></td>
            <td><input type="radio" value="2" name="sarana" required /></td>
            <td><input type="radio" value="1" name="sarana" required /></td>
          </tr>
        </table>
	    <br>
		<br>
        <h4>Kritik dan Saran (Opsional)</h4>
        <textarea rows="5" value = "" name = "kritik"></textarea>
		<br>
		<br>
		<Center>
		<button class="btn btn--pill btn--green" type="submit" value="daftar" name="daftar">Simpan</button>
        </Center>
		</div>
      </form>
    </div>
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
<!-- end document-->