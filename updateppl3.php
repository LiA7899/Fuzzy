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
  $query  = "UPDATE proyek_perangkat_lunak SET nama = '$nama', nim = '$nim', UTS = '$UTS', UAS = '$UAS', rerata = '$rerata', total_tugas = '$total_tugas', NA = '$NA' WHERE nim = '$nim'";

  $result = mysqli_query($connect, $query);
  
  if($result){?>
    <script language="JavaScript">
      alert('Proses Update Anda Berhasil');
      document.location='nilaippl.php';
    </script>
    <?php
  }
  else{?>
    <script language="JavaScript">
      alert('Proses Update Anda Gagal.Silahkan Ulangi Kembali!!');
      document.location='updateppl2.php';
    </script>
    <?php
  }
 }
?>
