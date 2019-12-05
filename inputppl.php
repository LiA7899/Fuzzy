<?php
if(isset($_POST['insert'])){
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $UTS = $_POST['UTS'];
  $UAS = $_POST['UAS'];
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

  //fuzzification rerata
    
    if ($rerata<=50 && $total_tugas<=1){
      $NA = 0;
    }
    else if($rerata>50&&$rerata<=66 && $total_tugas>1&&$total_tugas<=4){
      $rendahfuz=(0-$rerata+66)/(66-50); //5/6
      $cukuprefuz=($rerata-50)/(66-50);
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA = (240*$cukuptotfuz)/(4*$cukuptotfuz);
    }
    else if($rerata>50&&$rerata<=66 && $total_tugas>4&&$total_tugas<=10){
      $rendahfuz=(0-$rerata+66)/(66-50); //5/6
      $cukuprefuz=($rerata-50)/(66-50);
      $kurangfuz=(0-$total_tugas+10)/(10-4);//2/3
      $cukuptotfuz=($total_tugas-4)/(10-4);//1/3
      $NA = (240*$cukuptotfuz)/(4*$cukuptotfuz);
    }
    else if($rerata>50&&$rerata<=66 && $total_tugas>10&&$total_tugas<=13){
      $rendahfuz=(0-$rerata+66)/(66-50); //5/6
      $cukuprefuz=($rerata-50)/(66-50);
      $kurangfuz=(0-$total_tugas+13)/(13-10);//2/3
      $cukuptotfuz=($total_tugas-10)/(13-10);//1/3
      $NA = (240*$cukuptotfuz)/(4*$cukuptotfuz);
    }
    else if($rerata>=72&&$rerata<=77 && $total_tugas>1&&$total_tugas<=4){
      $rendahfuz=(0-$rerata+77)/(77-72); //5/6
      $cukuprefuz=($rerata-72)/(77-72);
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA = (222*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=72&&$rerata<=77 && $total_tugas>4&&$total_tugas<=10){
      $rendahfuz=(0-$rerata+77)/(77-72); //5/6
      $cukuprefuz=($rerata-72)/(77-72);
      $kurangfuz=(0-$total_tugas{+10})/(10-4);//2/3
      $cukuptotfuz=($total_tugas-4)/(10-4);//1/3
      $NA = (222*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=72&&$rerata<=77 && $total_tugas>10&&$total_tugas<=13){
      $rendahfuz=(0-$rerata+77)/(77-72); //5/6
      $cukuprefuz=($rerata-72)/(77-72);
      $kurangfuz=(0-$total_tugas+13)/(13-10);//2/3
      $cukuptotfuz=($total_tugas-10)/(13-10);//1/3
      $NA = (222*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=81&&$rerata<=88 && $total_tugas>1&&$total_tugas<=4){
      $rendahfuz=(0-$rerata+88)/(88-81); //5/6
      $cukuprefuz=($rerata-81)/(88-81);
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA = (252*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=81&&$rerata<=88 && $total_tugas>4&&$total_tugas<=10){
      $rendahfuz=(0-$rerata+88)/(88-81); //5/6
      $cukuprefuz=($rerata-81)/(88-81);
      $kurangfuz=(0-$total_tugas{+10})/(10-4);//2/3
      $cukuptotfuz=($total_tugas-4)/(10-4);//1/3
      $NA = (252*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=81&&$rerata<=88 && $total_tugas>10&&$total_tugas<=13){
      $rendahfuz=(0-$rerata+88)/(88-81); //5/6
      $cukuprefuz=($rerata-81)/(88-81);
      $kurangfuz=(0-$total_tugas+13)/(13-10);//2/3
      $cukuptotfuz=($total_tugas-10)/(13-10);//1/3
      $NA = (252*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=92&&$rerata<=99 && $total_tugas>1&&$total_tugas<=4){
      $rendahfuz=(0-$rerata+99)/(99-92); //5/6
      $cukuprefuz=($rerata-92)/(99-92);
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA = (285*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=92&&$rerata<=99 && $total_tugas>4&&$total_tugas<=10){
      $rendahfuz=(0-$rerata+99)/(99-92); //5/6
      $cukuprefuz=($rerata-92)/(99-92);
      $kurangfuz=(0-$total_tugas{+10})/(10-4);//2/3
      $cukuptotfuz=($total_tugas-4)/(10-4);//1/3
      $NA = (285*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata>=92&&$rerata<=99 && $total_tugas>10&&$total_tugas<=13){
      $rendahfuz=(0-$rerata+99)/(99-92); //5/6
      $cukuprefuz=($rerata-92)/(99-92);
      $kurangfuz=(0-$total_tugas+13)/(13-10);//2/3
      $cukuptotfuz=($total_tugas-10)/(13-10);//1/3
      $NA = (285*$cukuptotfuz)/(3*$cukuptotfuz);
    }
    else if($rerata==67 && $total_tugas==1){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((162*$rendahfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$rendahfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==67 && $total_tugas==4){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==5){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((189*$cukuptotfuz)+(222*$cukuprefuz))/((3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==6){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//3/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==2){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((162*$kurangfuz)+(200*$cukuptotfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==3){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((162*$kurangfuz)+(200*$cukuptotfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==7){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((189*$rendahfuz)+(244*$cukuprefuz)+(246*$lengkapfuz))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkapfuz));
    }
    else if($rerata==67 && $total_tugas==10){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((189*$cukuprefuz)+(244*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuprefuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==11){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((213*$lengkapfuz)+(246*$cukuprefuz))/((3*$lengkapfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==12){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((213*$lengkapfuzi)+(246*$cukuprefuz))/((3*$lengkapfuzi)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==13){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((213*$rendahfuz)+(246*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==8){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((189*$cukuptotfuzi)+(222*$lengkap)+(246*$cukuprefuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$cukuprefuz));
    }
    else if($rerata==67 && $total_tugas==9){
      $rendahfuz=(0-$rerata+72)/(72-66); //5/6
      $cukuprefuz=($rerata-66)/(72-66);//1/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((189*$cukuptotfuzi)+(222*$lengkap)+(246*$cukuprefuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$cukuprefuz));
    }
     else if($rerata==68 && $total_tugas==1){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((162*$rendahfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$rendahfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==68 && $total_tugas==4){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==5){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((189*$cukuptotfuz)+(222*$cukuprefuz))/((3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==6){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//3/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==7){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((189*$rendahfuz)+(244*$cukuprefuz)+(246*$lengkapfuz))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkapfuz));
    }
    else if($rerata==68 && $total_tugas==10){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((189*$cukuprefuz)+(244*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuprefuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==11){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((213*$lengkapfuz)+(246*$cukuprefuz))/((3*$lengkapfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==12){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((213*$lengkapfuzi)+(246*$cukuprefuz))/((3*$lengkapfuzi)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==13){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((213*$rendahfuz)+(246*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==2){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((162*$kurangfuz)+(200*$cukuptotfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==3){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((162*$kurangfuz)+(200*$cukuptotfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==8){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((189*$cukuptotfuzi)+(222*$lengkap)+(246*$cukuprefuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$cukuprefuz));
    }
    else if($rerata==68 && $total_tugas==9){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((189*$cukuptotfuzi)+(222*$lengkap)+(246*$cukuprefuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$cukuprefuz));
    }
     else if($rerata==69 && $total_tugas==1){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((162*$rendahfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$rendahfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==69 && $total_tugas==4){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==5){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==6){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//3/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==7){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((189*$rendahfuz)+(244*$cukuprefuz)+(246*$lengkapfuz))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkapfuz));
    }
    else if($rerata==69 && $total_tugas==10){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((189*$cukuprefuz)+(244*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuprefuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==11){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((213*$lengkapfuz)+(246*$cukuprefuz))/((3*$lengkapfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==12){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((213*$lengkapfuzi)+(246*$cukuprefuz))/((3*$lengkapfuzi)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==13){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((213*$rendahfuz)+(246*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==69 && $total_tugas==2){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((162*$rendahfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$rendahfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==69 && $total_tugas==3){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((162*$rendahfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$rendahfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==69 && $total_tugas==8){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz)+(246*$lengkap))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkap));
    }
    else if($rerata==69 && $total_tugas==9){
      $rendahfuz=(0-$rerata+72)/(72-66); //3/6
      $cukuprefuz=($rerata-66)/(72-66);//3/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((189*$cukuptotfuzi)+(222*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuptotfuzi)+(3*$rendahfuz)+(3*$cukuprefuz));
    }

     else if($rerata==70 && $total_tugas==1){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((162*$cukuprefuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$cukuprefuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==70 && $total_tugas==4){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==5){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==6){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//3/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==7){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((189*$rendahfuz)+(244*$cukuprefuz)+(246*$lengkapfuz))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkapfuz));
    }
    else if($rerata==70 && $total_tugas==10){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((189*$cukuprefuz)+(244*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuprefuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==11){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((213*$lengkapfuz)+(246*$cukuprefuz))/((3*$lengkapfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==12){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((213*$lengkapfuzi)+(246*$cukuprefuz))/((3*$lengkapfuzi)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==13){
      $rendahfuz=(0-$rerata+72)/(72-66); //4/6
      $cukuprefuz=($rerata-66)/(72-66);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((213*$rendahfuz)+(246*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==70 && $total_tugas==2){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((162*$kurangfuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==70 && $total_tugas==3){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuptotfuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==70 && $total_tugas==8){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((189*$rendahfuz)+(222*$lengkap)+(246*$lengkap))/((3*$rendahfuz)+(3*$lengkap)+(3*$lengkap));
    }
    else if($rerata==70 && $total_tugas==9){
      $rendahfuz=(0-$rerata+72)/(72-66); //2/6
      $cukuprefuz=($rerata-66)/(72-66);//4/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((189*$rendahfuz)+(222*$cukuptotfuzi)+(246*$lengkap))/((3*$rendahfuz)+(3*$cukuptotfuzi)+(3*$lengkap));
    }
     else if($rerata==71 && $total_tugas==1){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((162*$cukuprefuz)+(200*$cukuptotfuz)+(222*$cukuptotfuz))/((3*$cukuprefuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==71 && $total_tugas==4){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuprefuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==5){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((189*$rendahfuz)+(222*$cukuptotfuzi))/((3*$rendahfuz)+(3*$cukuptotfuzi));
    }
    else if($rerata==71 && $total_tugas==6){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//3/3
      $NA =((189*$rendahfuz)+(222*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==7){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((189*$rendahfuz)+(244*$cukuprefuz)+(246*$lengkapfuz))/((3*$rendahfuz)+(3*$cukuprefuz)+(3*$lengkapfuz));
    }
    else if($rerata==71 && $total_tugas==10){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((189*$cukuprefuz)+(244*$rendahfuz)+(246*$cukuprefuz))/((3*$cukuprefuz)+(3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==11){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((213*$lengkapfuz)+(246*$cukuprefuz))/((3*$lengkapfuz)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==12){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((213*$lengkapfuzi)+(246*$cukuprefuz))/((3*$lengkapfuzi)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==13){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((213*$rendahfuz)+(246*$cukuprefuz))/((3*$rendahfuz)+(3*$cukuprefuz));
    }
    else if($rerata==71 && $total_tugas==2){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuptotfuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==71 && $total_tugas==3){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((162*$kurangfuz)+(200*$rendahfuz)+(222*$cukuptotfuz))/((3*$kurangfuz)+(3*$rendahfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==71 && $total_tugas==8){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((189*$rendahfuz)+(222*$cukuptotfuzi)+(246*$lengkap))/((3*$rendahfuz)+(3*$cukuptotfuzi)+(3*$lengkap));
    }
    else if($rerata==71 && $total_tugas==9){
      $rendahfuz=(0-$rerata+72)/(72-66); //1/6
      $cukuprefuz=($rerata-66)/(72-66);//5/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((189*$rendahfuz)+(222*$cukuptotfuzi)+(246*$lengkap))/((3*$rendahfuz)+(3*$cukuptotfuzi)+(3*$lengkap));
    }
    else if($rerata==78 && $total_tugas==1){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuptotfuz)+(246*$cukuptotfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==78 && $total_tugas==4){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((161*$kurangfuz)+(198*$kurangfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$kurangfuz)+(3*$kurangfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==2){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuptotfuz)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuptotfuz)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==5){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==6){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==7){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((213*$cukuprefuzi)+(246*$bagusfuz)+(270*$lengkapfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==78 && $total_tugas==10){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$cukuprefuzi)+(288*$bagusfuz))/((3*$cukuprefuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==11){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==12){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==13){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==3){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==8){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((213*$cukuprefuzi)+(246*$lengkap)+(280*$bagusfuz))/((3*$cukuprefuzi)+(3*$lengkap)+(3*$bagusfuz));
    }
    else if($rerata==78 && $total_tugas==9){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//3/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((213*$cukuptotfuzi)+(246*$bagusfuz)+(280*$bagusfuz))/((3*$cukuptotfuzi)+(3*$bagusfuz)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==1){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuptotfuz)+(246*$cukuptotfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==79 && $total_tugas==4){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((161*$kurangfuz)+(198*$kurangfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$kurangfuz)+(3*$kurangfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==5){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==6){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==7){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((213*$cukuprefuzi)+(246*$bagusfuz)+(270*$lengkapfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==79 && $total_tugas==10){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$cukuprefuzi)+(288*$bagusfuz))/((3*$cukuprefuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==11){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==12){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==13){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==2){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuptotfuz)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuptotfuz)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==3){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//1/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==8){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((213*$cukuprefuzi)+(246*$lengkap)+(280*$bagusfuz))/((3*$cukuprefuzi)+(3*$lengkap)+(3*$bagusfuz));
    }
    else if($rerata==79 && $total_tugas==9){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//2/6
      $bagusfuz=($rerata-77)/(81-77);//2/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((213*$cukuptotfuzi)+(246*$bagusfuz)+(280*$bagusfuz))/((3*$cukuptotfuzi)+(3*$bagusfuz)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==1){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuptotfuz)+(246*$cukuptotfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==80 && $total_tugas==4){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//3/3
      $NA =((161*$kurangfuz)+(198*$kurangfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$kurangfuz)+(3*$kurangfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==5){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==6){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((214*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==7){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((213*$cukuprefuzi)+(246*$bagusfuz)+(270*$lengkapfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==80 && $total_tugas==10){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$cukuprefuzi)+(288*$bagusfuz))/((3*$cukuprefuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==11){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==12){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==13){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((237*$cukuprefuzi)+(270*$bagusfuz))/((3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==2){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((161*$cukuprefuzi)+(198*$bagusfuz)+(222*$cukuprefuzi)+(246*$cukuptotfuz))/((3*$cukuprefuzi)+(3*$bagusfuz)+(3*$cukuprefuzi)+(3*$cukuptotfuz));
    }
    else if($rerata==80 && $total_tugas==3){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((161*$cukuprefuzi)+(198*$kurangfuz)+(222*$cukuprefuzi)+(246*$bagusfuz))/((3*$cukuprefuzi)+(3*$kurangfuz)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==80 && $total_tugas==8){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((213*$cukuprefuzi)+(246*$cukuprefuzi)+(280*$lengkap))/((3*$cukuprefuzi)+(3*$cukuprefuzi)+(3*$lengkap));
    }
    else if($rerata==80 && $total_tugas==9){
      $cukuprefuzi=(0-$rerata+81)/(81-77);//1/6
      $bagusfuz=($rerata-77)/(81-77);//3/6
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((213*$cukuprefuzi)+(246*$cukuprefuzi)+(280*$bagusfuz))/((3*$cukuprefuzi)+(3*$cukuprefuzi)+(3*$bagusfuz));
    }
    else if($rerata==89 && $total_tugas==1){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((189*$bagusfuzi)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$bagusfuzi)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==89 && $total_tugas==4){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$kurangfuz)+(246*$cukuptotfuz)+(270*$sangat_bagusfuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==5){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((237*$cukuptotfuz)+(270*$sangat_bagusfuz))/((3*$cukuptotfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==6){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((237*$cukuptotfuzi)+(270*$sangat_bagusfuz))/((3*$cukuptotfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==7){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((261*$bagusfuzi)+(270*$sangat_bagusfuz)+(288*$lengkapfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==89 && $total_tugas==10){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$cukuprefuz)+(3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==11){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((261*$lengkapfuz)+(288*$sangat_bagusfuz))/((3*$lengkapfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==12){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((261*$lengkapfuzi)+(288*$sangat_bagusfuz))/((3*$lengkapfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==13){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((261*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==2){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$sangat_bagusfuzi)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$sangat_bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==89 && $total_tugas==3){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((189*$kurangfuz)+(246*$cukuptotfuz)+(270*$sangat_bagusfuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==8){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((237*$cukuptotfuzi)+(270*$lengkap)+(291*$sangat_bagusfuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$sangat_bagusfuz));
    }
    else if($rerata==89 && $total_tugas==9){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((237*$cukuptotfuzi)+(270*$lengkap)+(291*$sangat_bagusfuz))/((3*$cukuptotfuzi)+(3*$lengkap)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==2){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$sangat_bagusfuz)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$sangat_bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==90 && $total_tugas==1){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((189*$bagusfuzi)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$bagusfuzi)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==90 && $total_tugas==4){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$kurangfuz)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==90 && $total_tugas==5){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((237*$bagusfuzi)+(270*$sangat_bagusfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==6){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((237*$bagusfuzi)+(270*$sangat_bagusfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==7){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((261*$bagusfuzi)+(270*$sangat_bagusfuz)+(288*$lengkapfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==90 && $total_tugas==10){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$cukuprefuz)+(3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==11){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((261*$lengkapfuz)+(288*$sangat_bagusfuz))/((3*$lengkapfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==12){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((261*$lengkapfuzi)+(288*$sangat_bagusfuz))/((3*$lengkapfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==13){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((261*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==3){
      $bagusfuzi=(0-$rerata+92)/(92-88);//3/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//1/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((189*$kurangfuz)+(246*$cukuptotfuz)+(270*$sangat_bagusfuz))/((3*$kurangfuz)+(3*$cukuptotfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==90 && $total_tugas==8){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((237*$bagusfuzi)+(270*$bagusfuzi)+(291*$lengkap))/((3*$bagusfuzi)+(3*$bagusfuzi)+(3*$lengkap));
    }
    else if($rerata==90 && $total_tugas==9){
      $bagusfuzi=(0-$rerata+92)/(92-88);//2/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//2/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((237*$cukuptotfuzi)+(270*$bagusfuzi)+(291*$lengkap))/((3*$cukuptotfuzi)+(3*$bagusfuzi)+(3*$lengkap));
    }
    else if($rerata==91 && $total_tugas==1){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//3/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//0/3
      $NA =((189*$sangat_bagusfuz)+(246*$cukuptotfuz)+(270*$cukuptotfuz))/((3*$sangat_bagusfuz)+(3*$cukuptotfuz)+(3*$cukuptotfuz));
    }
    else if($rerata==91 && $total_tugas==4){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//0/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$kurangfuz)+(246*$bagusfuzi)+(270*$cukuptotfuz))/((3*$kurangfuz)+(3*$bagusfuzi)+(3*$cukuptotfuz));
    }
    else if($rerata==91 && $total_tugas==5){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//2/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//1/3
      $NA =((237*$bagusfuzi)+(270*$cukuptotfuz))/((3*$bagusfuzi)+(3*$cukuptotfuz));
    }
    else if($rerata==91 && $total_tugas==6){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuptotfuz=(0-$total_tugas+7)/(7-4);//1/3
      $cukuptotfuzi=($total_tugas-4)/(7-4);//2/3
      $NA =((237*$bagusfuzi)+(270*$cukuptotfuzi))/((3*$bagusfuzi)+(3*$cukuptotfuzi));
    }
    else if($rerata==91 && $total_tugas==7){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//3/3
      $lengkapfuz=($total_tugas-7)/(10-7);//0/3
      $NA =((261*$bagusfuzi)+(270*$sangat_bagusfuz)+(288*$lengkapfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz)+(3*$lengkapfuz));
    }
    else if($rerata==91 && $total_tugas==10){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuprefuz=(0-$total_tugas+10)/(10-7);//0/3
      $lengkapfuz=($total_tugas-7)/(10-7);//3/3
      $NA =((261*$cukuprefuz)+(270*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$cukuprefuz)+(3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==91 && $total_tugas==11){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//2/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//1/3
      $NA =((261*$lengkapfuz)+(288*$sangat_bagusfuz))/((3*$lengkapfuz)+(3*$sangat_bagusfuz));
    }
    else if($rerata==91 && $total_tugas==12){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//1/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//2/3
      $NA =((261*$lengkapfuzi)+(288*$sangat_bagusfuz))/((3*$lengkapfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==91 && $total_tugas==13){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $lengkapfuz=(0-$total_tugas+13)/(13-10);//0/3
      $lengkapfuzi=($total_tugas-10)/(13-10);//3/3
      $NA =((261*$bagusfuzi)+(288*$sangat_bagusfuz))/((3*$bagusfuzi)+(3*$sangat_bagusfuz));
    }
    else if($rerata==91 && $total_tugas==2){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//2/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//1/3
      $NA =((189*$kurangfuz)+(246*$bagusfuzi)+(270*$cukuptotfuz))/((3*$kurangfuz)+(3*$bagusfuzi)+(3*$cukuptotfuz));
    }
    else if($rerata==91 && $total_tugas==3){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $kurangfuz=(0-$total_tugas+4)/(4-1);//1/3
      $cukuptotfuz=($total_tugas-1)/(4-1);//2/3
      $NA =((189*$kurangfuz)+(246*$bagusfuzi)+(270*$cukuptotfuz))/((3*$kurangfuz)+(3*$bagusfuzi)+(3*$cukuptotfuz));
    }
    else if($rerata==91 && $total_tugas==8){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//2/3
      $lengkap=($total_tugas-7)/(10-7);//1/3
      $NA =((237*$bagusfuzi)+(270*$cukuptotfuzi)+(291*$lengkap))/((3*$bagusfuzi)+(3*$cukuptotfuzi)+(3*$lengkap));
    }
    else if($rerata==91 && $total_tugas==9){
      $bagusfuzi=(0-$rerata+92)/(92-88);//1/4
      $sangat_bagusfuz=($rerata-88)/(92-88);//3/4
      $cukuptotfuzi=(0-$total_tugas+10)/(10-7);//1/3
      $lengkap=($total_tugas-7)/(10-7);//2/3
      $NA =((237*$bagusfuzi)+(270*$cukuptotfuzi)+(291*$lengkap))/((3*$bagusfuzi)+(3*$cukuptotfuzi)+(3*$lengkap));
    }
  include_once('connect.php');

  $result =  "INSERT INTO proyek_perangkat_lunak (nama,nim,UTS,UAS,rerata,total_tugas,NA)VALUES('$nama','$nim','$UTS','$UAS',$rerata,'$total_tugas',$NA)";

  $results = mysqli_query($connect, $result);
  
  if ($results) {?>
    <script language="JavaScript">
      alert('Input Anda Berhasil!');
      document.location='nilaippl.php';
    </script>
    <?php
  }
  else{ 
    ?>
    <script language="JavaScript">
      alert('Input Anda Gagal. Silahkan diulang kembali!');
      document.location='ppl.php';
    </script>
    <?php
  }
}
else{
  echo '<script>window.history.back()</script>';  
}

?>
