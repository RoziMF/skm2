 <?php

include("koneksi.php");

if(isset($_POST['daftar'])){

    $gender = $_POST['gender'];
	$usia = $_POST['usia'];
	$pend = $_POST['pend'];
	$pekerjaan = $_POST['pekerjaan'];
	$layanan = $_POST['layanan'];
	$tanggal = date("Y-m-d");

    $sql = "INSERT INTO profil (gender, usia, pend, pekerjaan, layanan, tanggal) VALUE ('$gender', '$usia', '$pend','$pekerjaan','$layanan','$tanggal')";
    $query = mysqli_query($db, $sql);

    
    if( $query ) {
       
        header("Location: /skm/kuesioner/index.php");
die();
    }


}

?>