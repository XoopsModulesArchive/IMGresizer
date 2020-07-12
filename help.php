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
<SCRIPT LANGUAGE="JavaScript">

function popUp(URL) {
day = new Date();
id = day.getTime();
eval("page" + id + " = window.open(URL, '" + id + "', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=0,width=350,height=350,left = 470,top = 200');");
}
</script>
</head>

<p><b><font size="+1" color="
<?php echo ''._IR_XOIMGRESIZER_RCLICKCOLOR .'';?>
"><?php 
echo ''._IR_XOIMGRESIZER_POPUP1.'';
?> </b></font></p>
<font color="<?php echo ''._IR_XOIMGRESIZER_HEADERCOLOR.'';?>">
<?php 
echo ''._IR_XOIMGRESIZER_POPUP2.'';
?> 
</font>





 