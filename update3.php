<?php

if (isset($_POST['edit'])) {
  
 

  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $UTS = $_POST['UTS'];
  $UAS = $_POST['UAS'];
  $rerata = $_POST['rerata'];
  $total_tugas = $_POST['total_tugas'];
  $NA = $_POST['NA'];

   include("connect.php");
  $query  = "UPDATE kecerdasan_buatan SET nama = '$nama', nim = '$nim', UTS = '$UTS', UAS = '$UAS', rerata = '$rerata', total_tugas = '$total_tugas', NA = '$NA' WHERE nim = '$nim'";

  $result = mysqli_query($connect, $query);
  
  if($result){?>
    <script language="JavaScript">
      alert('Proses Update Anda Berhasil');
      document.location='nilaiakhir.php';
    </script>
    <?php
  }
  else{?>
    <script language="JavaScript">
      alert('Proses Update Anda Gagal.Silahkan Ulangi Kembali!!');
      document.location='update2.php';
    </script>
    <?php
  }
 }
?>
