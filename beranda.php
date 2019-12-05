<?php
  // memanggil file koneksi.php untuk melakukan koneksi database
  include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.kot1{
			height: 40px;
			padding: 10px;
			text-align: center;
			background: teal;
			font-weight: bold;
			font: 28px times new roman ;
			color: black;
		}
		.kot2{
			height: 310px;
			width: 500px;
			float: left;
			background: grey;
			margin-top: 10px;
			margin-left: 70px;
			padding-left: 10px;
			font-weight: bold;
			padding-top: 5px;
		}
		.kot3{
			height: 330px;
			width: 450px;
			margin-left: 20px;
		}
		input{
			height: 24px;
		}
		.kot4{
			width: 220px;
			height: 70px;
			float: left;
			margin-left:220px;
			margin-top: 5px;
		}
		
		.new{
			background:teal;
			height:80px;
			width:120px;
			display:block;
			height: 135px; 
			width: 200px; 
			float: left;
			margin-left: 90px; 
			margin-top: 113px;
			font:20px times new roman;
			font-weight: bold;
			color:darkblue;
		}
		.search{
			background:teal;
			height:80px;
			width:120px;
			display:block;
			height: 135px; 
			width: 200px; 
			float: left;
			margin-left: 1040px; 
			margin-top: -300px;
			font:20px times new roman;
			font-weight: bold;
			color:darkblue;
		}
		.delete{
			background: teal;
			height:20px;
			width:20px;
			display:block;
			height: 135px; 
			width: 250px; 
			float: left;
			margin-top: 113px; 
			font:20px times new roman;
			font-weight: bold;
			color:darkblue;
		}
		
		.update{
			background: teal;
			height:10px;
			width:20px;
			display:block;
			height: 135px; 
			width: 250px; 
			float: left; 
			margin-top: 280px;
			font:20px times new roman;
			font-weight: bold;
			color:darkblue;
		}
		.back{
			background: teal;
			height:20px;
			width:20px;
			display:block;
			height: 135px; 
			width: 250px; 
			float: left; 
			margin-top: 280px;
			font:20px times new roman;
			font-weight: bold;
			color:darkblue;
		}
		.kot5{
			height:auto;
			width: 1200px;
			float: left;
			margin-top: 600px;
			margin-left: 70px;
			background: grey;
		}
		table{
			border-collapse: collapse;
		}
		.kot6{
			height:auto;
			width:300px;
			position: absolute;
			float: right;
			background: white;
			margin-top: 10px;
			margin-left: 70px;
			right:100px;
			top:450px;
			color:black;

		}
		.footer{
			height: 100px;
			background: blue;
			margin-top: 558px;
		}
		warna{
			color:red;
		}
	</style>
</head>
<form method="post"><input type="submit" name="logout" value="logout" style="font-weight: bold;float: right;margin-top: 0px; margin-right:2px; background: powderblue; width: 100px; height: 30px;"></form>
  <?php
  if (isset($_POST['logout'])) {
    header('location:login.html');
  }
  ?>
<div class="kot1">
		Daftar Matakuliah S1 Teknik Informatika 2017
	</div>

<body>
	
	<!-- <div class="kot4"> --> 
	<form action="halamanawal.php" method="post"><input type="submit" name="kecerdesan_buatan" value="Kecerdasan Buatan" class="new"></form>
	<form action="ada.php"><input type="submit" name="update" value="Analisis Desain Algoritma" class="update"></form>
	<form action="ads.php"><input type="submit" name="delete" value="Analisis Desain Sistem" class="delete"></form>
	<form action="ppl.php"><input type="submit" name="back" value="Proyek Perangkat Lunak" class="back"></form>
	<form action="mm.php" method="post"><input type="submit" name="search" value="Multimedia" class="search"></form>
	<!-- </div>  -->       
</body>
</html>