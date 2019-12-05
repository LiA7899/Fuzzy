<?php
  include 'connect.php';
  if (isset($_GET['nim'])) {
    
    $nim = ($_GET["nim"]);
    $query = "SELECT * FROM analisis_desain_sistem WHERE nim='$nim'";
    $result = mysqli_query($connect, $query);
    
    if(!$result){
      die ("Query Error: ".mysqli_errno($connect).
         " - ".mysqli_error($connect));
    }
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];        
    $nim = $data["nim"];
    $UTS = $data["UTS"];
    $UAS = $data["UAS"];
    $rerata = $data["rerata"];
    $total_tugas = $data["total_tugas"];
    $NA = $data["NA"];

  } else {
    header("location:updateads.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Data</title>
<style type="text/css">
    
    .kot1{
      height: 60px;
      padding: 10px;
      text-align: center;
      background: teal;
      font-weight: bold;
      font: 28px times new roman ;
      color: black;
    }
    .kot2{
      height: 350px;
      width: 500px;
      float: left;
      background: powderblue;
      margin-top: 25px;
      margin-left: 410px;
      padding-left: 10px;
      font-weight: bold;
      padding-top: 35px;
    }
    .kot3{
      height: 330px;
      width: 450px;
      margin-left: 20px;
    }
    input{
      height: 24px;
    }
  </style>
</head>
<body>
<form method="post"><input type="submit" name="back" value="Back" style="font-weight: bold;float: right;margin-top: 0px; margin-right: 1210px; background: powderblue; width: 100px; height: 30px;"></form>
  <?php
  if (isset($_POST['back'])) {
    header('location:updateads.php');
  }
  ?>
<div class="kot1">
  Update Data Nilai Mahasiswa Matakuliah Analisis Desain Sistem
</div>
    
  </div>
  <div class="kot2">
    <div class="kot3">
    <form action="updateads3.php" method="post">
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama" value="<?php echo $nama; ?>" size="40" required></td>
        </tr>
        <tr>
          <td>NIM</td>
          <td><input type="text" name="nim" value="<?php echo $nim; ?>" size="40" required></td>
        </tr>
        <tr>
          <td>UTS</td>
          <td><input type="text" name="UTS" value="<?php echo $UTS; ?>" size="40" required></td>
        </tr>
        <tr>
          <td>UAS</td>
          <td><input type="text" name="UAS" value="<?php echo $UAS; ?>" size="40" required></td>
        </tr>
        <tr>
          <td>Rerata</td>
          <td><input type="text" name="rerata" value="<?php echo $rerata; ?>" style="width: 308px;" required></td>
        </tr>
        <tr>
          <td>Total Tugas</td>
          <td><input type="text" name="total_tugas" value="<?php echo $total_tugas; ?>" size="40" required></td>
        </tr>
        <tr>
          <td>Nilai Akhir</td>              
          <td><input type="text" name="NA" value="<?php echo $NA; ?>" size="40" required></td>
        </tr>
      </table>
      <input type="submit" name="edit" value="Update Data" style="height: 35px;width: 130px; margin-top: 25px; margin-left: 165px; background: teal">
  </div>
  </div>
</body>
</html>