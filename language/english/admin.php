<?php
// Module  by Rune Hauge (Runeher)
// color of the header
define('_IR_XOIMGRESIZER_HEADERCOLOR', '#6c8090'); // Bluish - Change to your preferences
// color of the sizes
define('_IR_XOIMGRESIZER_RCLICKCOLOR', '#339933'); // Green - Change to your preferences
define('_IR_XOIMGRESIZER_ERRORCOLOR', '#FF0000'); // Red - Change to your preferences
define('_IR_XOIMGRESIZER_BY', 'Module by');
define('_IR_XOIMGRESIZER_HELP', 'Help');
//Popup-admin-help
define('_IR_XOIMGRESIZER_POPUP1', 'Help');
define('_IR_XOIMGRESIZER_POPUP2', '<p>To edit image or thumbnail output size open index.php and look for:</p>
<p>$modwidth = 550;</p>
<p>and </p>
<p>$modwidth = 120;</p>
<p>Change it to your preferences in pixels.</p>
<p>To enable/disable thumbnails/avatars look in index.php around line 115.</p>
<p>What if someone submit a non image file? It does not matter as any file
submitted will be given jpg extention, meaning you will be able to delete it from the admin menu.</p>');
// admin things
define('_IR_XOIMGRESIZER_DELETED', 'All images have been removed!');
define('_IR_XOIMGRESIZER_SHOWDIR', 'SHOW FILES IN RESIZE FOLDER!');
define('_IR_XOIMGRESIZER_CLICKHERE', 'DELETE FILES IN RESIZE FOLDER!');
define('_IR_XOIMGRESIZER_ADMIN', 'Image Resizer Admin');
define('_IR_XOIMGRESIZER_FILES', 'Files:');
define('_IR_XOIMGRESIZER_DETAIL', 'Contents of folder :');// Details of the path
// Note! The files remove.php and showdir.php located in the resizedimages directory can / should / will NOT be deleted!
define('_IR_XOIMGRESIZER_NOTE1', 'Note! The files remove.php, showdir.php and index.html located in the resizedimages directory can / should / will NOT be deleted!');
define('_IR_XOIMGRESIZER_BYTES', 'Bytes');
define('_IR_XOIMGRESIZER_KB', 'KB');
define('_IR_XOIMGRESIZER_MB', 'MB');
define('_IR_XOIMGRESIZER_GB', 'GB');
define('_IR_XOIMGRESIZER_TOTSIZE', 'Total Size:');
define('_IR_XOIMGRESIZER_TOTFILES', 'Number of files:'); // No. of files:
define('_IR_XOIMGRESIZER_TOTDIR', 'Number of folders:'); // No. of directories:

?>