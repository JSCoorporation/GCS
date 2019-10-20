<?php 


	$id = $_GET['id'];

$hapus=mysqli_query($koneksi,"DELETE FROM dosen_penguji WHERE id_bim_skripsi = '$id'" );
if($hapus){
    header("Location:index.php?posisi=Back&file=dosen_penguji");
}else{
    echo"Data Gagal Disimpan";
}
?>