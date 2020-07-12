<?php
include("../../mainfile.php");
include(XOOPS_ROOT_PATH."/header.php");
$xoopsOption['show_rblock'] = 1;
if (file_exists('language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php')) {
  include_once 'language/'.$GLOBALS['xoopsConfig']['language'].'/modinfo.php';
}else{
  include_once 'language/english/modinfo.php';
}
?>
<head>
<script src="js/jquery-1.3.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.openPopupWindow.js" type="text/javascript"></script>

</head>


   <script type="text/javascript">
        $(document).ready(function()
        {
            $("#s1").click(function(evt)
            {
                $(this).openPopupWindow();
                evt.preventDefault();
            });

        });

    </script>
<center>
<?php
echo '<font face="Verdana" color="';
echo ''._IR_XOIMGRESIZER_HEADERCOLOR .'';
echo '" size="+3"><center>'._IR_XOIMGRESIZER_BEGIN.'</center></font>';
?>
<br>
<img border="0" src="images/topimg.png"><br><br></div>
<div align= "center">
<?php
echo ''._IR_XOIMGRESIZER_SELECT .'';
?><form action="" method="post" enctype="multipart/form-data" id="something" >
        <input name="new_image" id="new_image" size="30" font face="Verdana" size="2"type="file" class="fileUpload" />
        <br><br><button name="submit" type="submit" font face="Verdana" size="2"class="submitButton"><?php
echo ''._IR_XOIMGRESIZER_REDUCEBUTTON.'';
?></button>
</form><br>
<?php
echo '<font face="Verdana" color="';
echo ''._IR_XOIMGRESIZER_RCLICKCOLOR .'';
echo '" size="3"><center>'._IR_XOIMGRESIZER_CANBE.'</center></font>';

?><br>
<?php
echo '<font face="Verdana" color="';
echo ''._IR_XOIMGRESIZER_HEADERCOLOR .'';
echo '" size="3"><center>'._IR_XOIMGRESIZER_ALLOWED.'</center><br>';
echo ''._IR_XOIMGRESIZER_ONLYJPG.'</font><br><br>';
echo "<center><font size=\"2\" color=\"";

	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";?><a id="s1" href="help.php?s=1" title="">
<?php echo ''._IR_XOIMGRESIZER_HELP.'';?>
</a></font>
     <?php
	 //begynn script
 // Grab extension from filename and create random id.
if (!empty($file_name)) {
	$ext = substr($file_name, strpos($file_name, ".")+1, strlen($file_name));
}
$newfilename = substr(md5(uniqid(microtime())), 0, 8).".jpg";
         if(isset($_POST['submit'])){
          if (isset ($_FILES['new_image'])){
              $imagename = $newfilename;
              $source = $_FILES['new_image']['tmp_name'];
              $target = "resizedimages/".$imagename;
              move_uploaded_file($source, $target);
              $imagepath = $imagename;

              $save = "resizedimages/" . $imagepath ; //This is the new file you saving
              $file = "resizedimages/" . $imagepath ; //This is the original file

              list($width, $height) = getimagesize($file) ;

              $modwidth = 550; //Set the width of the resized image in px

              $diff = $width / $modwidth;

              $modheight = $height / $diff;
              $tn = imagecreatetruecolor($modwidth, $modheight) ;
              if (!empty( $file )) {

              }

			  $image = @imagecreatefromgif($file) OR $image = @imagecreatefrompng($file) OR @$image = @imagecreatefromjpeg($file) ;
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;
              @imagejpeg($tn, $save, 90) OR @imagegif($tn, $save, 90) OR @imagepng($tn, $save, 90); //bilderes. sett til mindre for lavere kvalitet og høyere for bedre... 90 er anbefalt!

              $save = "resizedimages/sml_" . $imagepath ; //This is the new file you saving (thumb)
              $file = "resizedimages/" . $imagepath ; //This is the the new file you saving

              list($width, $height) = @getimagesize($file) ;

              $modwidth = 120; //Set the width of the thumb (eller avatar) in px

              $diff = $width / $modwidth;

              $modheight = $height / $diff;
              $tn = @imagecreatetruecolor($modwidth, $modheight) ;
              $image = @imagecreatefromjpeg($file) OR $image = @imagecreatefromgif($file) OR $image = @imagecreatefrompng($file) ;
              imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ;

              @imagejpeg($tn, $save, 90) OR @imagegif($tn, $save, 90)  OR @imagepng($tn, $save, 90); //bilderes. sett til mindre for lavere kvalitet og høyere for bedre... 90 er anbefalt!

			   echo "<br><br>";?>
			   </font>


<?php

//thumb... hvis legge til thumb, velg størrelse og res. over...
			  //if you want a thumbnail /avatar to be created, uncomment the following (remove  /* and */) ...

			/*

	   echo ''._IR_XOIMGRESIZER_THUMB.'';

            echo "<br><br><img src='resizedimages/sml_".$imagepath."'><br>";
			   echo ''._IR_XOIMGRESIZER_THUMB2.'';

			   */
			   //slutt thumb

echo ''._IR_XOIMGRESIZER_ORIGIMAGE .'';
echo "<br><b><font face=\"Verdana\" size=\"2\" color=\"";
echo ''._IR_XOIMGRESIZER_RCLICKCOLOR .'';
echo "\">    $file </b></font> <br>";
echo ''._IR_XOIMGRESIZER_WIDTH .'';
echo " $width ";
echo ''._IR_XOIMGRESIZER_HEIGHT .'';
echo " $height <br>";?>


 <?php            echo "<br><img src='resizedimages/".$imagepath."'alt=\"";


 echo ''._IR_XOIMGRESIZER_ALT.'';

echo "\"><br><br>";

 echo "<b><font face=\"Verdana\" size=\"2\" color=\"";
echo ''._IR_XOIMGRESIZER_RCLICKCOLOR .'';
 echo "\"></b></font> <br /> ";
echo ''._IR_XOIMGRESIZER_SAVE .'';
 echo "<b><font face=\"Verdana\" size=\"2\" color=\"";
echo ''._IR_XOIMGRESIZER_RCLICKCOLOR .'';
 echo "\">";
echo ''._IR_XOIMGRESIZER_SAVE2 .'';
 echo "</b></font>";
          }
        }
?>
<br />
<!-- Please do not delete the link to this useful tool. Instead, let every site have it! After all, it's free, and i'm sure you're happy you found it... -->
<br><br><a target="blank" href="http://www.danordesign.com">
<?php
echo ''._IR_XOIMGRESIZER_LINKNAME .'';
?>
</a>
<br><br><br><br>

<?php
include(XOOPS_ROOT_PATH."/footer.php");
?>