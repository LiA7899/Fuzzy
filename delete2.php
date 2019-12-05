<?php

  include("connect.php");
  if (isset($_GET["nim"])) {
    $nim = $_GET["nim"];
    
    $query = "DELETE FROM `kecerdasan_buatan` WHERE nim='$nim'";

    echo "$query";

    $result = mysqli_query($connect, $query);
    if($result) {?>
      <script language="JavaScript">
        alert('Proses Delete Anda Berhasil');
        document.location='nilaiakhir.php';
      </script>
      <?php
    }
    else{?>
      <script language="JavaScript">
        alert('Proses Delete Anda Gagal.Silahkan Ulangi Kembali!!');
        document.location='delete.php';
      </script>
      <?php
    }
  }

?>
