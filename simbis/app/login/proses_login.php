<?php
$pass 	= $_POST['pass'];
$user 	= $_POST['usernm'];

$login 	= mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$user' AND password = '$pass'");
$ketemu = mysqli_num_rows($login);
$r 		= mysqli_fetch_array($login);
	
// Apabila username dan password ditemukan

if ($ketemu > 0)
{
	$_SESSION['username'] 	= $r['username'];	  		
	$_SESSION['nim'] 		= $r['nim'];
	$_SESSION['level'] 		= $r['level'];
	$_SESSION['nama'] 		= $r['nama'];

	echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?posisi=Back&file=home\">";
		  
}
else
{ 
	echo "<meta http-equiv=\"refresh\" content=\"0; url=index.php?posisi=Front&file=login&pesan=eror\">";
}
?>
