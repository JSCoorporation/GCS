<?php
# Membuka Menu Utama
if ($_GET['file'] == 'home')
{
	include "app/home.php";
}

$hub_menu=mysqli_query($koneksi,"SELECT * FROM menu WHERE file = '".$_GET['file']."' AND status = 'Aktif'");
while($mn=mysqli_fetch_array($hub_menu))
{
	if ($_GET['file'] == $mn['file'])
	{
		$folder = "app/".$mn['file']."/".$mn['file'].".php";
		if(file_exists($folder))
		{
			include "$folder";
		}
		
			
	}
	# Apabila menu tidak ditemukan
	else
	{?> <br>
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Maaf, Menu belum terinstall...!</strong>
        </div>
	<?php
	}
} 
?>
<!--  Awal Koneksi Dosen Bimbingan -->
<?php
# Membuka Menu Dosen Bimbingan
if ($_GET['file'] == 'dosen_bimbingan')
{
	include "app/dosen_bimbingan.php";
}

$hub_menu=mysqli_query($koneksi,"SELECT * FROM menu WHERE file = '".$_GET['file']."' AND status = 'Aktif'");
while($mn=mysqli_fetch_array($hub_menu))
{
	if ($_GET['file'] == $mn['file'])
	{
		$folder = "app/".$mn['file']."/".$mn['file'].".php";
		if(file_exists($folder))
		{
			include "$folder";
		}
		
			
	}
	# Apabila menu tidak ditemukan
	else
	{?> <br>
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Maaf, Menu belum terinstall...!</strong>
        </div>
	<?php
	}
} 
?>

<?php
# Membuka Menu History Dosen Bimbingan Skripsi
if ($_GET['file'] == 'history_bimbingan_skripsi')
{
	include "app/history_bimbingan_skripsi.php";
}
 
?>

<?php
# simpan bimbingan
if ($_GET['file'] == 'simpan_bimbingan')
{
	include "app/simpan_bimbingan.php";
}

?>
<!-- Awal Edit Data Bimbingan Skripsi -->
<?php
# Membuka Form Edit bimbingan Skripsi
if ($_GET['file'] == 'form_edit_bimbingan_skripsi')
{
	include "app/form_edit_bimbingan_skripsi.php";
}

?>

<?php
# Proses Edit bimbingan Skripsi
if ($_GET['file'] == 'proses_edit_bimbingan_skripsi')
{
	include "app/proses_edit_bimbingan_skripsi.php";
}

?>

<!-- Akhir Edit Data Bimbingan Skripsi -->

<?php
# Proses Edit History Bimbingan
if ($_GET['file'] == 'proses_edit_history_bimbingan')
{
	include "app/proses_edit_history_bimbingan.php";
}
?>

<?php
# Proses Edit History Bimbingan
if ($_GET['file'] == 'proses_hapus_dosen_bimbingan')
{
	include "app/proses_hapus_dosen_bimbingan.php";
}
?>
<!--  Akhir Koneksi Dosen Bimbingan -->

		<!--  BATAS -->

<!--  Awal Koneksi Dosen Nilai -->
<?php
# Membuka Menu Dosen Nilai
if ($_GET['file'] == 'dosen_nilai')
{
	include "app/dosen_nilai.php";
}

$hub_menu=mysqli_query($koneksi,"SELECT * FROM menu WHERE file = '".$_GET['file']."' AND status = 'Aktif'");
while($mn=mysqli_fetch_array($hub_menu))
{
	if ($_GET['file'] == $mn['file'])
	{
		$folder = "app/".$mn['file']."/".$mn['file'].".php";
		if(file_exists($folder))
		{
			include "$folder";
		}
		
			
	}
	# Apabila menu tidak ditemukan
	else
	{?> <br>
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Maaf, Menu belum terinstall...!</strong>
        </div>
	<?php
	}
} 
?>

<?php
# Proses Simpan Data Dosen Nilai
if ($_GET['file'] == 'simpan_nilai')
{
	include "app/simpan_nilai.php";
}

?>

<!--  Awal Proses EDIT NILAI -->
<?php
# Membuka Form edit nilai
if ($_GET['file'] == 'form_edit_nilai')
{
	include "app/form_edit_nilai.php";
}

?>

<?php
# Proses edit nilai
if ($_GET['file'] == 'proses_edit_nilai')
{
	include "app/proses_edit_nilai.php";
}
?>
<?php
# Proses edit nilai
if ($_GET['file'] == 'proses_hapus_dosen_nilai')
{
	include "app/proses_hapus_dosen_nilai.php";
}
?>


<!--  Akhir Proses EDIT NILAI -->
<!--  Akhir Koneksi Dosen Nilai -->

			<!--  BATAS -->

<!--  Awal Koneksi Dosen Penguji -->

<?php
# Membuka Menu Dosen Penguji
if ($_GET['file'] == 'dosen_penguji')
{
	include "app/dosen_penguji.php";
}

$hub_menu=mysqli_query($koneksi,"SELECT * FROM menu WHERE file = '".$_GET['file']."' AND status = 'Aktif'");
while($mn=mysqli_fetch_array($hub_menu))
{
	if ($_GET['file'] == $mn['file'])
	{
		$folder = "app/".$mn['file']."/".$mn['file'].".php";
		if(file_exists($folder))
		{
			include "$folder";
		}
		
			
	}
	# Apabila menu tidak ditemukan
	else
	{?> <br>
		<div class="alert alert-info">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Maaf, Menu belum terinstall...!</strong>
        </div>
	<?php
	}
} 
?>

<?php
# Membuka Menu History Dosen Bimbingan Skripsi Sidang
if ($_GET['file'] == 'history_bimbingan_skripsi_sidang')
{
	include "app/history_bimbingan_skripsi_sidang.php";
} ?>

<?php
# syntax simpan penguji
if ($_GET['file'] == 'simpan_penguji')
{
	include "app/simpan_penguji.php";
}

?>
<?php
#   Proses Edit Histori Bimbingan Skripsi Sidang
if ($_GET['file'] == 'proses_edit_history_bimbingan_skripsi_sidang')
{
	include "app/proses_edit_history_bimbingan_skripsi_sidang.php";
}

?>

<?php
# Membuka Form Edit bimbingan Skripsi Sidang
if ($_GET['file'] == 'form_edit_dosen_penguji_skripsi')
{
	include "app/form_edit_dosen_penguji_skripsi.php";
}

?>

<?php
# Proses Edit bimbingan Skripsi
if ($_GET['file'] == 'proses_edit_dosen_penguji_skripsi')
{
	include "app/proses_edit_dosen_penguji_skripsi.php";
}

?>

<?php
# Hapus Data Dosen Penguji
if ($_GET['file'] == 'proses_hapus_dosen_penguji')
{
	include "app/proses_hapus_dosen_penguji.php";
}

?>

<?php
#   Proses Edit Histori Bimbingan Skripsi Sidang
if ($_GET['file'] == 'proses_edit_history_bimbingan_skripsi_sidang')
{
	include "app/proses_edit_history_bimbingan_skripsi_sidang.php";
}

?>
<!--  Akhir Koneksi Dosen Penguji Skripsi -->

				<!--  BATAS -->