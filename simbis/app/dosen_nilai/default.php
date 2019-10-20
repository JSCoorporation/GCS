<ul class="breadcrumbs">
    <li><a href="index.php?posisi=Back&file=home"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Home <span class="separator"></span></li>
    <li>Dosen <span class="separator"></span></li>
    <li>Nilai Skripsi</li>
</ul>
        
<div class="pageheader">
    <div class="pageicon"><span class="iconfa-pencil"></span></div>
    <div class="pagetitle">
        <h1>Dosen - Nilai Skripsi</h1>
    </div>
</div><!--pageheader-->

<div class="maincontent">
    <div class="maincontentinner">
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahDataDosenNilai"><i class="iconfa-edit"></i> Tambah Data</button>
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
    
<!-- Awal Source Code Form Tambah Data Nilai Skripsi -->
    <!-- Modal -->
    <div id="TambahDataDosenNilai" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
    <!-- heading modal -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Tambah Data Dosen - Nilai Skripsi</h4>
    </div>
    <!-- body modal -->
    <div class="modal-body">
        <form action="index.php?posisi=Back&file=simpan_nilai" method="POST">
        <p>
            <label for="nim">NIM</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="input_nim" placeholder="Masukkan NIM" name="input_nim" /></span>
        </p>
        <p>
            <label for="nama">NAMA</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="input_nama" placeholder="Masukkan Nama" name="input_nama" /></span>
        </p>
        <p>
            <label for="judul">JUDUL</label>
            <span class="field">
            <input type="text" class="input-xlarge" id="input_judul" placeholder="Masukkan Judul" name="input_judul" /></span>
        </p>
        <p>
        <label for="dosen">DOSEN PEMBIMBING</label>
        <span class="field">
        <input type="text" class="input-xlarge" id="input_dosbing" placeholder="Masukkan Nama Dosen" name="input_dosbing" /></span>
        </p>
        <p>
        <label for="nilai">NILAI</label>
        <span class="field">
        <input type="number" class="input-medium" id="input_nilai" placeholder="Masukkan Nilai" name="input_nilai" /></span>
        </p>
                             
    <p class="stdformbutton">
        <button type="submit" class="btn btn-primary" name="btn-simpan">Simpan</button>  
    </p> </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
    </div>
    </div>
    </div> 
<!-- Akhir Source Code Form Tambah Data Nilai Skripsi -->


    
        <table>
        <thead>
            <br>
            
            <tr>
                <th>ID BIMBINGAN</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>JUDUL</th>           
                <th>DOSEN PEMBIMBING</th>
                <th>NILAI</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>

<?php
$sql = 'SELECT * FROM dosen_nilai';       
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
        <td> <?php echo $row['dosen_pembimbing'];?></td>
        <td><?php echo $row['nilai'];?> </td>
        <td><a href="index.php?posisi=Back&file=form_edit_nilai&id=<?php echo $row['id_bim_skripsi']; ?>&nim=<?php echo $row['nim']; ?>&nama=<?php echo $row['nama']; ?>&judul=<?php echo $row['judul']; ?>&dosen_pembimbing=<?php echo $row['dosen_pembimbing']; ?>&nilai=<?php echo $row['nilai']; ?>" button type="button" class="btn btn-warning" id="lihat" name="lihat"><i class="iconfa-edit"></i> Edit</button>
        <a href="index.php?posisi=Back&file=proses_hapus_dosen_nilai&id=<?php echo $row['id_bim_skripsi']; ?>" button type ="button" class="btn btn-danger" name="btn_hapus"><i class="iconfa-remove"></i> Hapus</a>
        </td>
    </tr>
<?php } ?>
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