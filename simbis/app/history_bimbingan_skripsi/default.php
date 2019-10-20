<ul class="breadcrumbs">
    <li><a href="index.php?posisi=Back&file=home"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Home <span class="separator"></span></li>
    <li>Dosen <span class="separator"></span></li>
    <li>Bimbingan Skripsi <span class="separator"></li></span>
    <li>History Bimbingan Skripsi</li>
</ul>
        
<div class="pageheader">
    <div class="pageicon"><span class="iconfa-tags"></span></div>
    <div class="pagetitle">
        <h1>Dosen - History Bimbingan Skripsi</h1>
    </div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">
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

<table> 
<thead>
<br>
<tr>
    <th>Id Bimbingan</th>
    <th>Tanggal</th>
    <th>Kategory</th>
    <th>Status</th>
    <th>Keterangan</th>           
    <th>Aksi</th>
</tr>
</thead>
<tbody>
    <!-- Awal Source Code History -->
<?php
$id = $_GET["id"];
?>
<?php
$sql = "SELECT * FROM dosen_bimbingan WHERE id_bim_skripsi='$id'";       
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
}
    

        
$row = mysqli_fetch_array($query);
 ?>

 <input type="hidden" name="id" value="<?php echo $row['id_bim_skripsi'] ?>"/>
<label>NIM : <?php echo $row['nim'] ?></label><br>
<label>Nama : <?php echo $row['nama'] ?></label><br>
<label>Judul : <?php echo $row['judul'] ?></label><br>
  <tr>

        <td class="center"><?php echo $row["id_bim_skripsi"] ?></td>
        <td><?php echo $row['tgl_bimbingan'];?></td>
        <td><?php echo $row['id_kategori'];?></td>
        <td><?php echo $row['status'];?></td>
        <td><?php echo $row['keterangan'];?></td>
        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#FormEditHistoryBimbingan"><i class="iconfa-edit"></i> Edit</button></td>
    </tr>
</tbody>
</table>
</body>
</html>
<!-- Awal Source Code Tombol Form Edit Data Bimbingan History Skripsi -->
    <!-- Modal -->
    <div id="FormEditHistoryBimbingan" class="modal fade" role="dialog">
    <div class="modal-dialog">
    <!-- konten modal-->
    <div class="modal-content">
    <!-- heading modal -->
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Edit Data Dosen - History Bimbingan Skripsi</h4>
    </div>
    <!-- body modal -->
    <div class="modal-body">
    <form action="index.php?posisi=Back&file=proses_edit_history_bimbingan" method="POST">
    <p><input type="hidden" name="input_id" value="<?php echo $_GET['id'] ?>"/>
    </p>
    <p>
        <label for="tanggal">TANGGAL</label>
        <span class="field">
        <input type="date" class="input-xlarge" id="input_dosbing" placeholder="Masukkan Tanggal" name="input_tanggal" value="<?php echo $row['tgl_bimbingan'] ?>" /></span>
        </p>
    <p>
        <label for="kategori">Kategori</label>
        <span class="field">
        <select name="input_kategori" id="sell">
        <option value="<?php echo $row['id_kategori'] ?>" selected="selected"><?php echo $row['id_kategori'] ?></option>    
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        </select>
        </span>
    </p>
    <p>
        <label for="status">Status</label>
        <span class="field">
        <select name="input_status" id="sell">
        <option value="<?php echo $row['status'] ?>" selected="selected"><?php echo $row['status'] ?></option>    
        <option value="Acc">Acc</option>
        <option value="Revisi">Revisi</option>
        <option value="Pending">Pending</option>
        </select>
        </span>
    </p>
    <p>
        <label>Keterangan</label>
        <span class="field"><textarea id="autoResizeTA" cols="80" rows="5" class="span5" style="resize: vertical" name="input_keterangan" placeholder="Masukkan Keterangan"><?php echo $row['keterangan'] ?></textarea></span> 
    </p>
                             
    <p class="stdformbutton">
        <button  type="submit" name="simpan" button class="btn btn-primary">Simpan</button>  
    </p>
    </form>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                </div>
    </div>
    </div>
    </div> 
<!-- Akhir Source Code Form Edit Data Bimbingan History Skripsi -->   


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