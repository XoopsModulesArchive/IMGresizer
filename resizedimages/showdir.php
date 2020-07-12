<?php
include_once '../../../include/cp_header.php';
 xoops_cp_header();
?><center>

<center>
<?php
echo '<font face="Verdana" color="';
echo ''._IR_XOIMGRESIZER_HEADERCOLOR .'';
echo '" size="+3"><center>'._IR_XOIMGRESIZER_ADMIN.'</center></font>';
?><br>
<img border="0" src="../images/topimg.png"><br><br>
<center><b>
<a href="../resizedimages/showdir.php"><?php 
echo ''._IR_XOIMGRESIZER_SHOWDIR .'';
?>
 </a><br><br>
<center>
<a href="../resizedimages/remove.php"><?php 
echo ''._IR_XOIMGRESIZER_CLICKHERE .'';
?>
 </a><br></b>
<br><small><?php 
echo ''._IR_XOIMGRESIZER_BY .'';
?> <a href="http://www.danordesign.com/" target="_blank">Danordesign</a>. <br><br></small>

<?php function getDirectorySize($path)
{
  $totalsize = 0;
  $totalcount = 0;
  $dircount = 0;
  if ($handle = opendir ($path))
  {
    while (false !== ($file = readdir($handle)))
    {
      $nextpath = $path . '/' . $file;
      if ($file != '.' && $file != '..' && !is_link ($nextpath))
      {
        if (is_dir ($nextpath))
        {
          $dircount++;
          $result = getDirectorySize($nextpath);
          $totalsize += $result['size'];
          $totalcount += $result['count'];
          $dircount += $result['dircount'];
        }
        elseif (is_file ($nextpath))
        {
          $totalsize += filesize ($nextpath);
          $totalcount++;
        }
      }
    }
  }
  closedir ($handle);
  $total['size'] = $totalsize;
  $total['count'] = $totalcount;
  $total['dircount'] = $dircount;
  return $total;
}

function sizeFormat($size)
{
    if($size<1024)
    {
        return $size.' '._IR_XOIMGRESIZER_BYTES .'';
    }
    else if($size<(1024*1024))
    {
        $size=round($size/1024,1);
        return $size.' '._IR_XOIMGRESIZER_KB .'';
    }
    else if($size<(1024*1024*1024))
    {
        $size=round($size/(1024*1024),1);
        return $size.' '._IR_XOIMGRESIZER_MB .'';
    }
    else
    {
        $size=round($size/(1024*1024*1024),1);
        return $size.' '._IR_XOIMGRESIZER_GB .'';
    }

}  
$path="../resizedimages";
$ar=getDirectorySize($path);
echo " <br>";
echo "<font size=\"+1\" color=\"";
	echo ''._IR_XOIMGRESIZER_RCLICKCOLOR.'';
	echo "\">";
	echo ''._IR_XOIMGRESIZER_DETAIL.'';
echo " $path <br>";
echo "</font> ";
echo "<br><center><font size=\"+1\" color=\"";
	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";
echo ''._IR_XOIMGRESIZER_TOTSIZE.''.sizeFormat($ar['size'])."<br>";
echo  ''._IR_XOIMGRESIZER_TOTFILES.''.$ar['count']."<br>";
echo ''._IR_XOIMGRESIZER_TOTDIR.''.$ar['dircount']."<br>";   // Note that !== did not exist until 4.0.0-RC2
echo "<center> ";
echo "</font><br> ";
echo "</font> ";
echo "<center><font size=\"2\" color=\"";
	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";
echo ''._IR_XOIMGRESIZER_NOTE1.'';?>
<br><br><fieldset>
<?php
echo "<br>";
echo "</font> ";
echo "<font size=\"1\" color=\"";
	echo ''._IR_XOIMGRESIZER_RCLICKCOLOR.'';
	echo "\">";
if ($handle = opendir('../resizedimages')) {
    echo "Directory handle: $handle\n";
    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'._IR_XOIMGRESIZER_FILES .'';
    /* This is the correct way to loop over the directory. */
    while (false !== ($file = readdir($handle))) {
		echo "<font size=\"1\" color=\"";
	echo ''._IR_XOIMGRESIZER_RCLICKCOLOR.'';
	echo "\">";
		echo "$file,   \n";
		echo "</font> ";?>
    <?php echo "</font> ";
    }
    closedir($handle);
}?>
<br><br></fieldset><br><br><?php
xoops_cp_footer();
?>