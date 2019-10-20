<?php
        $nim = $_POST['input_nim'];
        $nama = $_POST['input_nama'];
        $judul = $_POST['input_judul'];
        $dosbing = $_POST['input_dosbing'];
        $nilai = $_POST['input_nilai'];

$simpan=mysqli_query($koneksi,"INSERT INTO dosen_nilai(nim,nama,judul,dosen_pembimbing,nilai) VALUES('$nim', '$nama', '$judul', '$dosbing', '$nilai')" );
if($simpan){
    header("Location:index.php?posisi=Back&file=dosen_nilai");
}else{
    echo"Data Gagal Disimpan";
}
?> 