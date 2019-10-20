<ul class="breadcrumbs">
    <li><a href="index.php?posisi=Back&file=home"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Home <span class="separator"></span></li>
    <li>Dosen <span class="separator"></span></li>
    <li>Penguji Skripsi</li>
</ul>
        
<div class="pageheader">
    <div class="pageicon"><span class="iconfa-paper-clip"></span></div>
    <div class="pagetitle">
        <h1>Dosen - Penguji Skripsi</h1>
    </div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">
<br>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#FormTambahDataDosenPenguji"><i class="iconfa-edit"></i> Tambah Data</button>
<html>
<head>
<style>
    body {font-family:tahoma, arial}
    table {border-collapse: collapse}
    th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 10px 20px; color: #303030}
    th {background: #66CCAA; font-size: 12px; border-color:#B0B0B0}
    .subtotal td {background: #F8F8F8}
    .right{text-align: right}
</style>
</head>
<body>

<!-- Awal Source Code Form Tambah Data Dosen Penguji Skripsi -->
    <!-- Modal -->
    <div id="FormTambahDataDosenPenguji" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
    <!-- heading modal -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Tambah Data Dosen - Penguji Skripsi</h4>
    </div>
    <!-- body modal -->
    <div class="modal-body">
        <form action="index.php?posisi=Back&file=simpan_penguji" method="POST">
        <p>
            <label for="nim">NIM</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="nim" placeholder="Masukkan NIM" name="input_nim" /></span>
        </p>
        <p>
            <label for="nama">NAMA</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="nama" placeholder="Masukkan Nama" name="input_nama" /></span>
        </p>
        <p>
            <label for="judul">JUDUL</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="judul" placeholder="Masukkan Judul" name="input_judul" /></span>
        </p>
        <p>
        <label for="dosen">DOSEN PENGUJI</label>
        <span class="field">
        <input type="text" class="input-xlarge" id="dosen" placeholder="Masukkan Nama Dosen" name="input_dosen_penguji" /></span>
        </p>
                             
    <p class="stdformbutton">
        <button class="btn btn-primary" name="submit">Simpan</button>  
    </p> </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
    </div>
    </div>
    </div> 
<!-- Akhir Source Code Form Tambah Data Dosen Penguji Skripsi -->

<table>
    <thead>
    <br>
    <tr>
    <th>ID BIMBINGAN</th>
    <th>NIM</th>
    <th>NAMA</th>
    <th>JUDUL</th>           
    <th>DOSEN PENGUJI</th>
    <th>AKSI</th>
    </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT * FROM dosen_penguji";
        
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
}

        
while ($row = mysqli_fetch_array($query))
{ ?>
    <tr>
            <td class="center"><?php echo $row['id_bim_skripsi'];?></td>
            <td><?php echo $row['nim'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['judul'];?></td>
            <td><?php echo $row['dosen_penguji'];?></td>
            
            <td>
                <a href="index.php?posisi=Back&file=history_bimbingan_skripsi_sidang&id=<?php echo $row['id_bim_skripsi']; ?>" button type ="button" class="btn btn-rounded" name="btn_bimbingan"><i class="iconfa-eye-open"></i> Bimbingan</a>
                <a href="index.php?posisi=Back&file=form_edit_dosen_penguji_skripsi&id=<?php echo $row['id_bim_skripsi']; ?>&nim=<?php echo $row['nim']; ?>&nama=<?php echo $row['nama']; ?>&judul=<?php echo $row['judul']; ?>&dosen_penguji=<?php echo $row['dosen_penguji']; ?>" button type ="button" class="btn btn-warning" name="btn_edit"><i class="iconfa-edit"></i> Edit</a>
                <a href="index.php?posisi=Back&file=proses_hapus_dosen_penguji&id=<?php echo $row['id_bim_skripsi']; ?>" button type ="button" class="btn btn-danger" name="btn_hapus"><i class="iconfa-remove"></i> Hapus</a></td>
        </tr>
<?php }?>
</tbody>
</table>
</body>
</html>   


        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>


<div class="maincontent">
    <div class="maincontentinner">
            <center>
                <span>&copy; 2019. Desain dan Pemrograman WEB</span>
            </center> <hr>
        <!--footer-->
                
    </div><!--maincontentinner-->
</div><!--maincontent-->