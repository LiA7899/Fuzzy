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
			padding: 20px;
			text-align: center;
			background: teal;
			font-weight: bold;
			font: 28px times new roman ;
			color: black;
		}
		.kot2{
			height: 340px;
			width: 500px;
			float: left;
			background: powderblue;
			margin-top: 20px;
			margin-left: 400px;
			padding-left: 10px;
			font-weight: bold;
			padding-top: 35px;
		}
		.kot3{
			height:30px;
			width: 450px;
			margin-left: 60px;
		}
		input{
			height: 22px;
		}
		.kot4{
			width: 220px;
			height: 170px;
			float: left;
			margin-left:200px;
			margin-top: 230px;
		}
		
		.insert{
			background: url(insert.png) no-repeat center left;
			height:20px;
			width:20px;
			display:block;
			height: 35px; 
			width: 110px; 
			float: left; 
			margin-top: 32px;
		}
		
		
	</style>
</head>
<body>
	<form method="post"><input type="submit" name="back" value="Back" style="font-weight: bold;float: right;margin-top: 0px; margin-right: 1250px; background: powderblue; width: 100px; height: 30px;"></form>
  <?php
  if (isset($_POST['back'])) {
    header('location:beranda.php');
  }
  ?>
	<div class="kot1">
		Input Data Nilai Mahasiswa Matakuliah Analisis Desain Algoritma
	</div>
	<div class="kot2">
		<div class="kot3">
		<form action="inputada.php" method="post">
			<table>
				<tr>
				<tr>
					<td>Nama </td>
					<td><input type="text" name="nama" size="40" required></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim" size="40" required></td>
				</tr>
		
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td>UTS</td>
					<td><input type="text" name="UTS" size="40" required></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td>UAS</td>
					<td><input type="text" name="UAS" size="40" required></td>
				</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr>
					<td>Total tugas</td>
					<td><input type="text" name="total_tugas" size="40" required></td>
				</tr>
	
			</table>
			
	</div><br>
	<div class="kot4">
	<form action="inputada.php" method="post"><input type="submit" name="insert" value="Insert" style="float: right;margin-top: 20px; margin-right: 110px; background: teal; width: 100px; height: 30px;></form>
	</div>
		<div class="footer"></div>
	</div>
</body>
</html>