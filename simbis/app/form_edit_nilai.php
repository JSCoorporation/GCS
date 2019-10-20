<?php
if (empty($_GET['subfile']))
{
    include "app/".$_GET['file']."/default.php";
}

else
{
	?> 
	<br>
	<div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Terjadi Kesalahan sistem.</strong>
    </div>
	<?php
}
?>