<?php
	$id = $_POST['input_id'];
    $nim = $_POST['input_nim'];
    $nama = $_POST['input_nama'];
    $judul = $_POST['input_judul'];
    $dosbing = $_POST['input_dosbing'];
    $nilai = $_POST['input_nilai'];

$simpan=mysqli_query($koneksi,"UPDATE dosen_nilai SET id_bim_skripsi='$id',nim='$nim',nama='$nama',judul='$judul',dosen_pembimbing='$dosbing',nilai='$nilai' WHERE id_bim_skripsi = '$id'" );
if($simpan){
    header("Location:index.php?posisi=Back&file=dosen_nilai");
}else{
    echo"Data Gagal Disimpan";
}
?>