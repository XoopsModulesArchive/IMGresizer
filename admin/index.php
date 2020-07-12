<?php
include_once '../../../include/cp_header.php';
 xoops_cp_header();
 
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
 
 <br>
<center>
<?php 
echo "<center><font size=\"2\" color=\"";
	
	echo ''._IR_XOIMGRESIZER_ERRORCOLOR.'';
	echo "\">";?><a id="s1" href="help.php?s=2" title="">
<?php echo ''._IR_XOIMGRESIZER_HELP.'';?>
</a><br></b></font>
 
<br><small><?php 
echo ''._IR_XOIMGRESIZER_BY .'';
?> <a href="http://www.danordesign.com/" target="_blank">Danordesign</a>. <br><br></small>
<?php

xoops_cp_footer();
?>