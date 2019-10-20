<?php
ini_set('display_errors','On');
session_start();
include "system/koneksi.php";
include "system/tanggal.php";

$ft_theme_url = "thema/";
$bc_theme_url = "thema/";

if (!empty($_GET['posisi'])) 
{
	$posisi = $_GET['posisi'];
}
else
{
	$posisi = '';
}

if ($posisi == 'Front')
{
    include "system/front_index.php";
}
elseif ($posisi == 'Back')
{
    include "system/back_index.php";
}
else
{
    $linkmn=$_SERVER['PHP_SELF']."?posisi=Front&file=login";
    echo "<meta http-equiv=\"refresh\" content=\"0;url=$linkmn\">";
}
?>