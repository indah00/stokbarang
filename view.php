<?php
require 'function.php';
require 'cek.php';

//Dapetin ID barang yang dipassing di halaman sebelumnya
$idbarang = $_GET['id']; //get id barang
//Get informasi barang berdasarkan database
$get = mysqli_query($conn, "select * from stock where idbarang='$idbarang'");
$fetch = mysqli_fetch_assoc($get);
//set variable
$namabarang = $fetch['namabarang'];
$deskripsi = $fetch['deskripsi'];
$stock = $fetch['stock'];

//cek ada gambar atau tidak
$gambar = $fetch['image']; //ambil gambar
if($gambar==null){
//jika tidak ada gambar
$img = 'No Photo';
}else{
//jika ada gambar
$img = '<img class="card-img-top" src="images/'.$gambar.'" alt="Card image" style="width:100%">';
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<title>Menampilkan Barang</title>
</head>
<body>

	<div class="container">
		<h3>Detail Barang:</h3>
	  <div class="card" style="width:400px">
	  	<?=$img;?>
	    <div class="card-body">
	      <h4 class="card-title"><?=$namabarang;?></h4>
	      <h4 class="card-text"><?=$deskripsi;?></h4>
	      <h4 class="card-text"><?=$stock;?></h4>
	    </div>
	  </div>
	  <br>

</div>

</body>
</html>