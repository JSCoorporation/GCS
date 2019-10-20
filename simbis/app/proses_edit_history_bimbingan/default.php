<?php 


	$id = $_POST['input_id'];
	$tanggal = $_POST['input_tanggal'];
    $kategori = $_POST['input_kategori'];
    $status = $_POST['input_status'];
    $keterangan = $_POST['input_keterangan'];


$simpan=mysqli_query($koneksi,"UPDATE dosen_bimbingan SET id_bim_skripsi='$id',tgl_bimbingan='$tanggal',id_kategori='$kategori',status='$status',keterangan='$keterangan' WHERE id_bim_skripsi = '$id'" );
if($simpan){?>
<?php 
$sql = "SELECT * FROM dosen_bimbingan WHERE id_bim_skripsi='$id'";
        
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
}
$row = mysqli_fetch_array($query);
header("Location:index.php?posisi=Back&file=history_bimbingan_skripsi&id=$row[id_bim_skripsi]");
}else{
    echo"Data Gagal Disimpan";
}
?><?php?>