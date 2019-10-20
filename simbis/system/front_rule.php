<?php
$hub_menu = mysqli_query($koneksi,"SELECT * FROM menu WHERE file='$_GET[file]' AND posisi = 'Front' AND status = 'Aktif'");

while($mn = mysqli_fetch_array($hub_menu))
{
	# Membuka Menu Utama
	if ($_GET['file'] == $mn['file'])
	{
		$folder = "app/".$mn['file'].".php";
		if(file_exists($folder))
		{
			include "$folder";
		}
		else #file belum dibuat tapi tabel menu sudah ada
		{ ?> <br>
			<div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Maaf, Menu masih dalam taraf develop...!</strong>
            </div>
		<?php
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