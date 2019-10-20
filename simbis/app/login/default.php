<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="system/img/logo.png" alt="" height="130" width="110"/></div>
        <div class="inputwrapper animate1 bounceIn">
            <center>
            <label>
                <h4>SISTEM INFORMASI BIMBINGAN SKRIPSI ONLINE<br> UNIVERSITAS SEMARANG</h4>
            </label>
            </center>
        </div> <br>
        <form id="login" action="index.php?posisi=Front&file=login&subfile=proses_login" method="post">
            <div class="inputwrapper animate2 bounceIn">
                <input type="text" name="usernm" id="usernm" placeholder="Enter any username" autocomplete = "Off"/>
            </div>
            <div class="inputwrapper animate3 bounceIn">
                <input type="password" name="pass" id="pass" placeholder="Enter any password" />
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <button name="submit">Sign In</button>
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <a href="index.php?posisi=Front&file=registrasi"> <p style="color: white;"> Registrasi </p></a>
            </div>
        </form>
        <div class="inputwrapper login-alert">
            <div class="alert alert-error">Username dan Password tidak boleh kosong</div>
        </div>
        <br>
        <?php
            if (!empty($_GET['pesan']))
            { ?>
                <div class="inputwrapper">
                    <div class="alert alert-error"><center>Username dan Password salah</center></div>
                </div>
            <?php
            } ?>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->