<?php
// Place this file in the folder you wish to delete the files in.
// Change the .jpg to the file name extension you wish to delete.
include_once '../../../include/cp_header.php';
 xoops_cp_header();

echo '<font face="Verdana" color="';


echo ''._IR_XOIMGRESIZER_HEADERCOLOR .'';



echo '" size="+3"><center>'._IR_XOIMGRESIZER_ADMIN.'</center></font>';?>
<center>
<img border="0" src="../images/topimg.png"><br><br>

<?php

//script:


foreach (glob("*.jpg") as $filename) {

//om jeg gidder...
  // echo "$filename size " . filesize($filename) . "\n";
   unlink($filename);
}


//script slutt...



echo "<br><center><font size=\"+2\" color=\"";
	
	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";
	echo ''._IR_XOIMGRESIZER_DELETED.'';
	echo "</font><br><br> ";
	
	echo "<center><font size=\"2\" color=\"";
	
	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";
echo ''._IR_XOIMGRESIZER_NOTE1.'';

echo "<br><br>";
echo "</font> ";?>
	
	
	
<center><b>
<br>
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
?> <a href="http://www.danordesign.com/" target="_blank">Danordesign</a>. <br><br></small><?php

xoops_cp_footer();
?>