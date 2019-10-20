<?php 


	$id = $_GET['id'];

$hapus=mysqli_query($koneksi,"DELETE FROM dosen_bimbingan WHERE id_bim_skripsi = '$id'" );
if($hapus){
    header("Location:index.php?posisi=Back&file=dosen_bimbingan");
}else{
    echo"Data Gagal Disimpan";
}
?>