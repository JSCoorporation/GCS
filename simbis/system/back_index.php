<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style type="text/css">
    ul>li, a{cursor: pointer;}
    </style>
<title>SIMBIS USM</title>
<link rel="stylesheet" href="<?php echo $bc_theme_url;?>css/style.default.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $bc_theme_url;?>css/bootstrap-fileupload.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $bc_theme_url;?>css/bootstrap-timepicker.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $bc_theme_url;?>prettify/prettify.css" type="text/css" />

<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/charCount.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/colorpicker.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/ui.spinner.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/modernizr.min.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/forms.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/elements.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>prettify/prettify.js"></script>
<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/tinymce/jquery.tinymce.js"></script>

<script type="text/javascript" src="<?php echo $bc_theme_url;?>js/wysiwyg.js"></script>

<body>
<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="index.php?posisi=Back&file=home"></a>
        </div>

        <div class="headerinner">
            <div class="span6">
                <div class="userloggedinfo">
                    <div class="userinfo">
                        <p><h3>Sistem Bimbingan Skripsi Online</h3></p>
                        <p><h3>Universitas Semarang</h3></p>
                    </div>
                </div>
            </div>
            <div class="7">
                <ul class="headmenu">
                    <li class="right">
                        <div class="userloggedinfo">
                            <img src="img/profil1.png" alt="" />

                            <div class="userinfo">
                                <h4>Halo, <?php echo $_SESSION['nama']; ?> !</h4>
                                <ul>
                                    <li><a href="#RessPass" data-toggle="modal">Reset Password</a></li>
                                    <li><a href="index.php?posisi=Front&file=login&subfile=logout">Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div aria-hidden="false" aria-labelledby="myModalLabel" role="dialog" tabindex="0" class="modal hide fade in" id="RessPass" style="width: 60%">
	    <div class="modal-header">
	        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
	        <h3 id="myModalLabel">Reset Password</h3>
	    </div>
	    <form class="stdform" action="index.php?posisi=Back&file=resetpassword" method="post">
	        <div class="modal-body">
	            <p>
	                <label>Password Lama</label>
	                <span class="field"><input type="password" name="oldpass" class="input-medium" autofocus required/></span>
	            </p>
	            <p>
	                <label>Password Baru</label>
	                <span class="field"><input type="password" name="newpass" class="input-medium" required/></span>
	            </p>
	            <p>
	                <label>Konfirmasi Password Baru</label>
	                <span class="field"><input type="password" name="confpass" class="input-medium" required/></span>
	            </p>
	        </div>
	        <div class="modal-footer">
	            <button class="btn btn-primary">Simpan</button>
	        </div>
	    </form>
	</div>



    <div class="leftpanel">
        
        <?php
        // menu front
        include "system/back_menu.php";
        ?>
        
    </div><!-- leftpanel -->
    <div class="rightpanel">
        <div class="maincontent">
            <div class="maincontentinner">
                <?php
                // CONTEN
                include "system/back_rule.php";
                ?>

                <div class="footer">
                    <div class="footer-right">
                        <span>Desain dan Pemrograman WEB &copy; 2019</span>
                        <hr>
                    </div>
                </div><!--footer-->

            </div>
        </div>        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

<div class="maincontent">
    <div class="maincontentinner">
            
        <!--footer-->
                
    </div><!--maincontentinner-->
</div><!--maincontent-->

</body>
</html>
