<?php
		$nim = $_POST['input_nim'];
        $nama = $_POST['input_nama'];
        $judul = $_POST['input_judul'];
        $dosenpenguji = $_POST['input_dosen_penguji'];
$simpan=mysqli_query($koneksi,"INSERT INTO dosen_penguji(nim,nama,judul,dosen_penguji) VALUES('$nim', '$nama', '$judul', '$dosenpenguji')" );
if($simpan){
	header("Location:index.php?posisi=Back&file=dosen_penguji");
	}else{
    echo"Data Gagal Disimpan";
}

?> 