<?php

  include("connect.php");
  if (isset($_GET["nim"])) {
    $nim = $_GET["nim"];
    
    $query = "DELETE FROM `multimedia` WHERE nim='$nim'";

    echo "$query";

    $result = mysqli_query($connect, $query);
    if($result) {?>
      <script language="JavaScript">
        alert('Proses Delete Anda Berhasil');
        document.location='nilaimm.php';
      </script>
      <?php
    }
    else{?>
      <script language="JavaScript">
        alert('Proses Delete Anda Gagal.Silahkan Ulangi Kembali!!');
        document.location='deletemm.php';
      </script>
      <?php
    }
  }

?>
