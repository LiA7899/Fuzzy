<?php
if(isset($_POST['insert'])){
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$matakuliah = $_POST['matakuliah'];
	$UTS = $_POST['UTS'];
	$UAS = $_POST['UAS'];
	/*$rerata = $_POST['rerata'];*/
	$rerata = ($UTS+$UAS)/2;
	$total_tugas = $_POST['total_tugas'];

	//INPUT NILAI CRISP
	//fuzzy rerata
	$rendah = $rerata>=0 && $rerata<=72;
	$cukupre = $rerata>=66 && $rerata<=81;
	$bagus = $rerata>=77 && $rerata<=92;
	$sangat_bagus = $rerata>=88 && $rerata<=99;
	//fuzzy total tugas
	$kurang = $total_tugas>=0 && $total_tugas<=4;
	$cukuptot = $total_tugas>=1 && $total_tugas<=10;
	$lengkap = $total_tugas>=7 && $total_tugas<=13;

	/*//fuzzy nilai
	$D = $nilai>=0 && $ $nilai<=63;
	$C = $nilai>=60 && $nilai<=71;
	$Bmin = $nilai>=68 && $nilai<=79;
	$Bplus = $nilai>=76 && $nilai<=87;
	$Amin = $nilai>=84 && $nilai<=95;
	$Aplus = $nilai>=92 && $nilai<=99;*/

	//fuzzification rerata
	if($rerata==$rendah && $rerata==$cukupre){
		$rendahfuz=(0-$rerata+72)/(72-66);
		$cukuprefuz=($rerata-66)/(72-66);
	}
	else if($rerata==$cukupre && $rerata==$bagus){
		$cukuprefuzi=(0-$rerata+81)/(81-77);
		$bagusfuz=($rerata-77)/(81-77);
	}
	else if($rerata==$bagus && $rerata==$sangat_bagus){
		$bagusfuzi=(0-$rerata+92)/(92-88);
		$sangat_bagusfuz=($rerata-88)/(92-88);
	}
	//fuzzification total_tugas
	if($total_tugas==$kurang && $total_tugas==$cukuptot){
		$kurangfuz=(0-$total_tugas+4)/(4-1);
		$cukuptotfuz=($total_tugas-1)/(4-1);
	}
	else if($total_tugas==$cukuptot && $total_tugas==$lengkap){
		$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
		$lengkap=($total_tugas-7)/(10-7);
	}

	//inference dan defuzzification
	$rendahfuz=(0-$rerata+72)/(72-66);
	$kurangfuz=(0-$total_tugas+4)/(4-1);
	if($rendahfuz > $kurangfuz){
		/*$NAfuz = $D;*/
		/*$NA = $_POST['NA'];*/
		$NA = ((10+20+30 )*$rendahfuz)/(3*$rendahfuz);
	}
	
	else if($rendahfuz < $kurangfuz){
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30 )*$kurangfuz)/(3*$kurangfuz);
  	}

  	$rendahfuz=(0-$rerata+72)/(72-66);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($rendahfuz > $cukuptotfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$rendahfuz)/(3*$rendahfuz);
  	}
  	else if($rendahfuz < $cukuptotfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$cukuptotfuz)/(3*$cukuptotfuz);
	}

	$cukuprefuz=($rerata-66)/(72-66);
  	$kurangfuz=(0-$total_tugas+4)/(4-1);  
  	if($cukuprefuz > $kurangfuz){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30)*$cukuprefuz)/(3*$cukuprefuz);
  	}
  	else if($cukuprefuz < $kurangfuz){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30)*$kurangfuz)/(3*$kurangfuz);
  	}

  	$cukuprefuz=($rerata-66)/(72-66);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($cukuprefuz > $cukuptotfuz){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuprefuz)/(3*$cukuprefuz);
  	}
  	else if($cukuprefuz < $cukuptotfuz){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuptotfuz)/(3*$cukuptotfuz);
  	} 

  	$cukuprefuzi=(0-$rerata+81)/(81-77);
  	$kurangfuz=(0-$total_tugas+4)/(4-1);  
  		if($cukuprefuzi > $kurangfuz){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30)*$cukuprefuzi)/(3*$cukuprefuzi);
  	}
  	else if($cukuprefuz < $kurangfuz){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+10)*$kurangfuz)/(3*$kurangfuz);
  	} 

  	$cukuprefuzi=(0-$rerata+81)/(81-77);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($cukuprefuzi > $cukuptotfuz){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuprefuzi)/(3*$cukuprefuzi);
  	}
  	else if($cukuprefuzi < $cukuptotfuz){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuptotfuz)/(3*$cukuptotfuz);
  	} 

  	$bagusfuz=($rerata-77)/(81-77);
  	$kurangfuz=(0-$total_tugas+4)/(4-1);
  	if($bagusfuz > $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$bagusfuz)/(3*$bagusfuz);
  	}
  	else if($bagusfuz < $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$kurangfuz)/(3*$kurangfuz);
  	} 

  	$bagusfuz=($rerata-77)/(81-77);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($bagusfuz > $cukuptotfuz){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$bagusfuz)/(3*$bagusfuz);
  	}
  	else if($bagusfuz < $cukuptotfuz){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuptotfuz)/(3*$cukuptotfuz);
  	}

  	$bagusfuzi=(0-$rerata+92)/(92-88);
  	$kurangfuz=(0-$total_tugas+4)/(4-1);
  	if($bagusfuzi > $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$bagusfuzi)/(3*$bagusfuzi);
  	}
  	else if($bagusfuzi < $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$kurangfuz)/(3*$kurangfuz);
  	}
  	$bagusfuzi=(0-$rerata+92)/(92-88);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($bagusfuzi > $cukuptotfuz){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$bagusfuzi)/(3*$bagusfuzi);
  	}
  	else if($bagusfuzi < $cukuptotfuz){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuptotfuz)/(3*$cukuptotfuz);
  	}

  	$sangat_bagusfuz=($rerata-88)/(92-88);
  	$kurangfuz=(0-$total_tugas+4)/(4-1);
  	if($sangat_bagusfuz > $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$sangat_bagusfuz)/(3*$sangat_bagusfuz);
  	}
  	else if($sangat_bagusfuz < $kurangfuz){
    	/*$NAfuz = $C;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((60+63+66)*$kurangfuz)/(3*$kurangfuz);
  	}

  	$sangat_bagusfuz=($rerata-88)/(92-88);
  	$cukuptotfuz=($total_tugas-1)/(4-1);
  	if($sangat_bagusfuz > $cukuptotfuz){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$sangat_bagusfuz)/(3*$sangat_bagusfuz);
  	}
  	else if($sangat_bagusfuz < $cukuptotfuz){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$cukuptotfuz)/(3*$cukuptotfuz);
  	}

  	$rendahfuz=(0-$rerata+72)/(72-66);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($rendahfuz > $cukuptotfuzi){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30)*$rendahfuz)/(3*$rendahfuz);
  	}
  	else if($rendahfuz < $cukuptotfuzi){
    	/*$NAfuz = $D;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((10+20+30)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$rendahfuz=(0-$rerata+72)/(72-66);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($rendahfuz > $lengkap){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$rendahfuz)/(3*$rendahfuz);
  	}
  	else if($rendahfuz < $lengkap){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$lengkap)/(3*$lengkap);
  	}

  	$cukuprefuz=($rerata-66)/(72-66);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($cukuprefuz > $cukuptotfuzi){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuprefuz)/(3*$cukuprefuz);
  	}
  	else if($cukuprefuz < $cukuptotfuzi){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$cukuprefuz=($rerata-66)/(72-66);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($cukuprefuz > $lengkap){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuprefuz)/(3*$cukuprefuz);
  	}
  	else if($cukuprefuz < $lengkap){
   		/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$lengkap)/(3*$lengkap);
  	}

  	$cukuprefuzi=(0-$rerata+81)/(81-77);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($cukuprefuzi > $cukuptotfuzi){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuprefuzi)/(3*$cukuprefuzi);
  	}
  	else if($cukuprefuzi < $cukuptotfuzi){
    	/*$NAfuz = $B-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((68+71+74)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$bagusfuz=($rerata-77)/(81-77);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($bagusfuz > $cukuptotfuzi){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$bagusfuz)/(3*$bagusfuz);
  	}
  	else if($bagusfuz < $cukuptotfuzi){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$cukuprefuzi=(0-$rerata+81)/(81-77);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($cukuprefuzi > $lengkap){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuprefuzi)/(3*$cukuprefuzi);
  	}
  	else if($cukuprefuzi < $lengkap){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$lengkap)/(3*$lengkap);
  	}

  	$bagusfuz=($rerata-77)/(81-77);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($bagusfuz > $lengkap){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$bagusfuz)/(3*$bagusfuz);
  	}
  	else if($bagusfuz < $lengkap){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$lengkap)/(3*$lengkap);
  	}

  	$bagusfuzi=(0-$rerata+92)/(92-88);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($bagusfuzi > $cukuptotfuzi){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$bagusfuzi)/(3*$bagusfuzi);
  	}
  	else if($bagusfuzi < $cukuptotfuzi){
    	/*$NAfuz = $B+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((76+79+82)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$bagusfuzi=(0-$rerata+92)/(92-88);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($bagusfuzi > $lengkap){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$bagusfuzi)/(3*$bagusfuzi);
  	}
  	else if($bagusfuzi < $lengkap){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
  	  	$NA = ((84+87+90)*$lengkap)/(3*$lengkap);
  	}

  	$sangat_bagusfuz=($rerata-88)/(92-88);
  	$cukuptotfuzi=(0-$total_tugas+10)/(10-7);
  	if($sangat_bagusfuz > $cukuptotfuzi){
    	/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$sangat_bagusfuz)/(3*$sangat_bagusfuz);
  	}
  	else if($sangat_bagusfuz < $cukuptotfuzi){
   		/*$NAfuz = $A-;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((84+87+90)*$cukuptotfuzi)/(3*$cukuptotfuzi);
  	}

  	$sangat_bagusfuz=($rerata-88)/(92-88);
  	$lengkap=($total_tugas-7)/(10-7);
  	if($sangat_bagusfuz > $lengkap){
    	/*$NAfuz = $A+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((92+95+98)*$sangat_bagusfuz)/(3*$sangat_bagusfuz);
  	}
  	else if($sangat_bagusfuz < $lengkap){
    	/*$NAfuz = $A+;*/
    	/*$NA = $_POST['NA'];*/
    	$NA = ((92+95+98)*$lengkap)/(3*$lengkap);
  	}


	include_once('connect.php');

	$result =  "INSERT INTO nilai (nama,nim,matakuliah,UTS,UAS,rerata,total_tugas,NA)VALUES('$nama','$nim','$matakuliah','$UTS','$UAS',$rerata,'$total_tugas',$NA)";

	$results = mysqli_query($connect, $result);
	/*$querys = mysqli_query($connect, $query);
*/
	if ($results) {?>
		<script language="JavaScript">
			alert('Input Anda Berhasil!');
			document.location='nilaiakhir.php';
		</script>
		<?php
	}
	/*else{ 
		?>
		<script language="JavaScript">
			alert('Input Anda Gagal. Silahkan diulang kembali!');
			document.location='nilaiakhir.php';
		</script>
		<?php
	}*/
}
else{
	echo '<script>window.history.back()</script>';	
}

?>
