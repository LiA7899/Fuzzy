<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Data Absensi</title>
  <style type="text/css">
   /* .header{
        height: 30px;
        width:100px;
        background: grey;
    }*/
    /*.backi{
          background: url(backk.jpg) no-repeat center left;
          height:30px;
          width:100px;
          display:block;
      }*/
    .kot1{
      height: 60px;
      padding: 10px;
      text-align: center;
      background: teal;
      font-weight: bold;
      font: 28px times new roman ;
      color: black;
    }
    .kot5{
      height: 900px;
      width: 100%;
      float: left;
      margin-top: 10px;
      background: powderblue;
    }
    table{
      border-collapse: collapse;
    }
  </style>
</head>
<body>
  <form method="post"><input type="submit" name="back" value="Back" style="font-weight: bold;float: right;margin-top: 0px; margin-right: 1210px; background: powderblue; width: 100px; height: 30px;"></form>
  <?php
  if (isset($_POST['back'])) {
    header('location:nilaimm.php');
  }
  ?>
  <div class="kot1">
Update Data Nilai Mahasiswa Matakuliah Multimedia</div>
  <div align="center">
  <!-- <div class="kot5"> -->

    <table border="2" cellspacing="" cellpadding="10" style="background: powderblue; margin-left:10px; margin-top: 5px;">
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>UTS</th>
        <th>UAS</th>
        <th>Rerata</th>
        <th>Total Tugas</th>
        <th>Nilai Akhir</th>
        <th>Pilihan</th>
      </tr>
      <?php
      $query = "SELECT * FROM multimedia ";
      $result = mysqli_query($connect, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($connect).
           " - ".mysqli_error($connect));
      }
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
        echo '<td>
          <a href="updatemm2.php?nim='.$data['nim'].'">Update</a>';
        echo "</tr>";
      }
      ?>
    </table>
  <!-- </div> --></div>
</body>
</html>