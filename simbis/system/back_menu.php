<?php
if ($_GET['file'] == 'home')
{
    $actt='class="active"';
}
else
{
    $actt='';
}
?>

<div class="leftmenu">        
    <ul class="nav nav-tabs nav-stacked">
        <li> <a class="ajax-link" href="index.php?posisi=Back&file=home"></a> 
        </li>
        <li <?php echo $actt;?>>
            <a class="ajax-link" href="index.php?posisi=Back&file=home">
                <span class="iconfa-laptop"></span> Home 
            </a>
        </li>

        <?php

        $level=mysqli_query($koneksi,"SELECT * FROM level WHERE level = '$_SESSION[level]' ORDER BY level");
        while ($lev=mysqli_fetch_array($level))
        { 
            $mu=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM menu WHERE file = '$_GET[file]'"));
            if ($lev['level'] == $mu['level'])
            {
                $act        = 'class="dropdown active"';
                $display    = 'style="display: block"';
            }
            else
            {
                $act        = 'class="dropdown"';
                $display    = '"';
            }
            ?>
            

            <li <?php echo $act;?>>
                <a href='Dosen'><span class="iconfa-briefcase"></span> <?php echo $lev['level']; ?></a>
                <ul <?php echo $display;?>>
                    <?php
                    $Menu=mysqli_query($koneksi,"SELECT * FROM menu WHERE level = '$_SESSION[level]' AND status = 'Aktif' ORDER BY nama_menu");
                    while ($mn=mysqli_fetch_array($Menu))
                    { 
                        if ($_GET['file'] == $mn['file']) 
                        {
                            $active = 'class="active"';
                        }
                        else
                        {
                            $active = '';
                        }
                        ?>
                        <li <?php echo $active;?> >
                            <a href="index.php?posisi=Back&file=<?php echo $mn['file'];?>">
                          
                                <span class="iconsweets-book"></span>
                                <?php echo $mn['nama_menu']; ?>
                            </a>
                        </li>
                        <?php
                    } ?>
                </ul>
            </li>

            <?php
        }
        ?>
    </ul>
</div><!--leftmenu-->