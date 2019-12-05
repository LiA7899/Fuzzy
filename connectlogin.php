<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

//akun login admin
if(isset($_POST['admin'])){
if(!empty($username)&& !empty($password)){
	$sql = mysqli_query($connect,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
	$result = mysqli_num_rows($sql);
	if($result){
		header('location:beranda.php');
	}
	else{
		?>
		<script language="JavaScript">
			alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
			document.location='login.html';
		</script>
		<?php
	}
}
else{
	echo "Email dan Password anda kosong, silahkan diisi.";
	}
}
else if(isset($_POST['user'])) {?>
		<script language="JavaScript">
			alert('Anda Bukan User. Silahkan diulang kembali!');
			document.location='login.html';
		</script>
		<?php
	}
?>