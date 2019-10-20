<?php
	$id = $_POST['input_id'];
    $nim = $_POST['input_nim'];
    $nama = $_POST['input_nama'];
    $judul = $_POST['input_judul'];
    $dosbing = $_POST['input_dosen_penguji'];

$simpan=mysqli_query($koneksi,"UPDATE dosen_penguji SET id_bim_skripsi='$id',nim='$nim',nama='$nama',judul='$judul',dosen_penguji='$dosbing' WHERE id_bim_skripsi = '$id'" );
if($simpan){
    header("Location:index.php?posisi=Back&file=dosen_penguji");
}else{
    echo"Data Gagal Disimpan";
}
?>