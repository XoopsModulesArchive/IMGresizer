<?php

//Module by Rune Hauge (Runeher)


//color of the header
define('_IR_XOIMGRESIZER_HEADERCOLOR','#6c8090'); //Bluish  - Change to your preferences 
//color of the sizes
define('_IR_XOIMGRESIZER_RCLICKCOLOR','#339933'); //Green - Change to your preferences 
define('_IR_XOIMGRESIZER_ERRORCOLOR','#FF0000'); //Red - Change to your preferences 


define('_IR_XOIMGRESIZER_BY','Modul fra');
define('_IR_XOIMGRESIZER_HELP','Hjelp');

//help-popup
//Popup-admin-help
define('_IR_XOIMGRESIZER_POPUP1', 'Hjelp');
define('_IR_XOIMGRESIZER_POPUP2', '<p>For å endre bilde eller thumbnail størrelsen, åpne index.php og se etter:</p>
<p>$modwidth = 550;</p>
<p>og</p>
<p>$modwidth = 120;</p>
<p>Endre til dine foretrukne mål i pixler.</p>
<p>For å bruke eller ta vekk thumbnails/avatars, se i index.php rundt linje 115.</p>
<p>Hva om noen sender en ikke-bilde fil? Det betyr ingenting, da alle filer blir døpt om til jpg så du kan slette dem fra admin menyen.</p>');

//admin things
define('_IR_XOIMGRESIZER_DELETED','Filene er slettet!');
define('_IR_XOIMGRESIZER_SHOWDIR','SE FILENE I RESIZE MAPPEN!');
define('_IR_XOIMGRESIZER_CLICKHERE','SLETT BILDENE I RESIZE MAPPEN!');
define('_IR_XOIMGRESIZER_ADMIN','Image Resizer Admin');
define('_IR_XOIMGRESIZER_FILES','Filer:');
define('_IR_XOIMGRESIZER_DETAIL','Innhold i mappen :');//Details for the path :
//Note! The files remove.php and showdir.php located in the resizedimages directory can /should/will NOT be deleted!
define('_IR_XOIMGRESIZER_NOTE1','Bemerk! Filene remove.php, showdir.php og index.html som er i resizedimages mappen må/kan IKKE slettes!');
define('_IR_XOIMGRESIZER_BYTES','Bytes');
define('_IR_XOIMGRESIZER_KB','KB');
define('_IR_XOIMGRESIZER_MB','MB');
define('_IR_XOIMGRESIZER_GB','GB');	
define('_IR_XOIMGRESIZER_TOTSIZE','Total størrelse: ');	
define('_IR_XOIMGRESIZER_TOTFILES','Antall filer: '); //No. of files:
define('_IR_XOIMGRESIZER_TOTDIR','Antall mapper: '); //No. of directories:

//admin menu - quick links
define('_IR_XOIMGRESIZER_ADMENU1','Indeks');
define('_IR_XOIMGRESIZER_ADMENU2','Se innhold i mappen');
define('_IR_XOIMGRESIZER_ADMENU3','Tøm mappen for innhold');
define('_IR_XOIMGRESIZER_ADMENU4','Vis modulen');

?>