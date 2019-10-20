<?php
        $nim = $_POST['input_nim'];
        $nama = $_POST['input_nama'];
        $judul = $_POST['input_judul'];
        $dosbing = $_POST['input_dosbing'];
$simpan=mysqli_query($koneksi,"INSERT INTO dosen_bimbingan(nim,nama,judul,dosen_pembimbing) VALUES('$nim', '$nama', '$judul', '$dosbing')" );
if($simpan){
    header("Location:index.php?posisi=Back&file=dosen_bimbingan");
}else{
    echo"Data Gagal Disimpan";
}

?> 