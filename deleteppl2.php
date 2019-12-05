<?php

  include("connect.php");
  if (isset($_GET["nim"])) {
    $nim = $_GET["nim"];
    
    $query = "DELETE FROM `proyek_perangkat_lunak` WHERE nim='$nim'";

    echo "$query";

    $result = mysqli_query($connect, $query);
    if($result) {?>
      <script language="JavaScript">
        alert('Proses Delete Anda Berhasil');
        document.location='nilaippl.php';
      </script>
      <?php
    }
    else{?>
      <script language="JavaScript">
        alert('Proses Delete Anda Gagal.Silahkan Ulangi Kembali!!');
        document.location='deleteppl.php';
      </script>
      <?php
    }
  }

?>
