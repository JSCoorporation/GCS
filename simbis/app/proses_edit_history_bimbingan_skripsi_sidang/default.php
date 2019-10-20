<?php 

	$id = $_POST['input_id'];
	$tanggal = $_POST['input_tanggal'];
    $status = $_POST['input_status'];
    $keterangan = $_POST['input_keterangan'];


$simpan=mysqli_query($koneksi,"UPDATE dosen_penguji SET id_bim_skripsi='$id',tgl_bimbingan='$tanggal',status='$status',keterangan='$keterangan' WHERE id_bim_skripsi = '$id'" );
if($simpan){?>
<?php 
$sql = "SELECT * FROM dosen_penguji WHERE id_bim_skripsi='$id'";
        
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
}
    
$row = mysqli_fetch_array($query);
header("Location:index.php?posisi=Back&file=history_bimbingan_skripsi_sidang&id=$row[id_bim_skripsi]");
}else{
    echo"Data Gagal Disimpan";
}
?><?php?>