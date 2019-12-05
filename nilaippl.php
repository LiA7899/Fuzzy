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
		/*.search{
			background: url(search.png) no-repeat center left;
			height:20px;
			width:20px;
			display:block;
			height: 30px; 
			width: 90px; 
			float: left; 
			margin-left: 10px;
		}*/
		.new{
			background:teal;
			height:20px;
			width:20px;
			display:block;
			height: 35px; 
			width: 110px; 
			float: left;
			margin-left: 380px;
			margin-top: 3px;
		}
		.delete{
			background: teal;
			height:20px;
			width:20px;
			display:block;
			height: 35px; 
			width: 110px; 
			float: left;
			margin-top: 3px; 
		}
		
		.update{
			background: teal;
			height:10px;
			width:20px;
			display:block;
			height: 35px; 
			width: 110px; 
			float: left; 
			margin-top: 3px;
		}
		.back{
			background: teal;
			height:20px;
			width:20px;
			display:block;
			height: 35px; 
			width: 110px; 
			float: left; 
			margin-top: 3px;
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
<div class="kot1">
		Daftar Nilai Mahasiswa Matakuliah Proyek Perangkat Lunak
	</div>
<body>
	
		<table border="2" cellspacing="" cellpadding="10" style="background: powderblue; margin-left: 320px; margin-top: 5px;">
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>UTS</th>
				<th>UAS</th>
				<th>Rerata</th>
				<th>Total_tugas</th>
				<th>NA</th>
			</tr>
			<?php
      $query = "SELECT * FROM proyek_perangkat_lunak ";
      $result = mysqli_query($connect, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
      }
      $no = 1; 
      while($data = mysqli_fetch_assoc($result))
      {
        echo "<tr>"; 
        echo "<td>$data[nama]</td>"; 
        echo "<td>$data[nim]</td>"; 
        echo "<td>$data[UTS]</td>"; 
        echo "<td>$data[UAS]</td>"; 
        echo "<td>$data[rerata]</td>"; 
        echo "<td>$data[total_tugas]</td>";  
        echo "<td>$data[NA]</td>";  
        echo "</tr>";
        $no++;
      }
      ?>
		</table> 
	
	<!-- <div class="kot4"> --> 
	<form action="addppl.php" method="post"><input type="submit" name="add" value="Add" class="new"></form>
	<form action="updateppl.php"><input type="submit" name="update" value="Update" class="update"></form>
	<form action="deleteppl.php"><input type="submit" name="delete" value="Delete" class="delete"></form>
	<form action="backppl.php" method="post"><input type="submit" name="back" value="Back" class="back"></form>
	<!-- </div>  -->       
</body>
</html>