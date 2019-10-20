<?php
if (empty($_GET['subfile']))
{
    include "app/".$_GET['file']."/default.php";
}
elseif ($_GET['subfile'] == 'proses_login')
{
	include "app/".$_GET['file']."/proses_login.php";
}
elseif ($_GET['subfile'] == 'logout')
{
	include "app/".$_GET['file']."/logout.php";
}
else
{
	?> <br>
			<div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Terjadi Kesalahan sistem.</strong>
            </div>
		<?php
}
?>