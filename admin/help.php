<?php
include_once '../../../include/cp_header.php';
 
 
if (file_exists('../language/'.$GLOBALS['xoopsConfig']['language'].'/admin.php')) {
  include_once '../language/'.$GLOBALS['xoopsConfig']['language'].'/admin.php';
}else{
  include_once '../language/english/admin.php';
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





 