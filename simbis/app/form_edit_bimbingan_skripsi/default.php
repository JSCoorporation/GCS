<ul class="breadcrumbs">
    <li><a href="index.php?posisi=Back&file=home"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
    <li>Home <span class="separator"></span></li>
    <li>Dosen <span class="separator"></span></li>
    <li>Bimbingan Skripsi <span class="separator"></li></span>
    <li>Edit Data Dosen - Bimbingan Skripsi</li>
</ul>
        
<div class="pageheader">
    <div class="pageicon"><span class="iconfa-tags"></span></div>
    <div class="pagetitle">
        <h1>Edit Data Dosen - Bimbingan Skripsi</h1>
    </div>
</div><!--pageheader-->

<div class="maincontent">
<div class="maincontentinner">
<br>
    <form action="index.php?posisi=Back&file=proses_edit_bimbingan_skripsi" method="POST">
    <fieldset> 

<div class="widget">
            <h4 class="widgettitle">Form Edit Data Dosen - Bimbingan Skripsi</h4>
            <div class="widgetcontent">   
<p>
    <label for="id_bimbingan">ID BIMBINGAN</label>
    <span class="field">
    <input type="text" class="input-xlarge" id="id_bimbingan" placeholder="Masukkan ID Bimbingan" name="input_id" value="<?php echo $_GET['id'] ?>" disable/></span>
</p>
<p>
    <label for="nim">NIM</label>
    <span class="field">
    <input type="text" class="input-xlarge" id="nim" placeholder="Masukkan NIM" name="input_nim" value="<?php echo $_GET['nim'] ?>" disable/></span>
</p>
<p>
    <label for="nama">NAMA</label>
    <span class="field">
    <input type="text" class="input-xlarge" id="nim" placeholder="Masukkan Nama" name="input_nama" value="<?php echo $_GET['nama'] ?>" disable/></span>
</p>
<p>
    <label for="judul">JUDUL</label>
    <span class="field">
    <input type="text" class="input-xlarge" id="nim" placeholder="Masukkan Judul" name="input_judul" value="<?php echo $_GET['judul'] ?>" disable/></span>
</p>
<p>
    <label for="dosbing">DOSEN PEMBIMBING</label>
    <span class="field">
    <input type="text" class="input-xlarge" id="nim" placeholder="Masukkan Nama Dosen" name="input_dosbing" value="<?php echo $_GET['dosen_pembimbing'] ?>" disable/></span>
</p>                         
    <p class="stdformbutton">
        <button name="submit" button class="btn btn-primary">Simpan</button>
        <a href="index.php?posisi=Back&file=dosen_bimbingan" button type ="button" class="btn btn-success" name="btn_batal"><i class="iconfa-edit"></i> Batal</a>  
    </p>
    </form></fieldset>
            </div></div>
  
        <br><br>
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