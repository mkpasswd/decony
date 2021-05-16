<?php

class DeconyApp{ 

//   _____ _____ _____ _____ _____ _____ _____ 
//  |_____|_____|_____|_____|_____|_____|_____|
//
function header($title='',$option='') {
$NOJS=(stripos($option,'NOJS')!==false);
?><!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?=SITE?>/rsc/DeconyApp.png" />
	<TITLE><?=APPNAME." $title"?></TITLE>
	<meta name="description" content="Decony Sample App">
	<meta name="viewport" content="width=device-width">
<? if(!$NOJS) { ?>
	<script src="<?=SITE?>/include/bundle-min.js"></script>
	<script src="<?=SITE?>/include/App.js.php"></script>
<? }; ?>
	<link rel="stylesheet" href="./node_modules/jquery-ui-themes/themes/redmond/jquery-ui.css">	
	<link rel="stylesheet" href="<?=SITE?>/rsc/DeconyApp.css">
</head>
<BODY>
<? if(!$NOJS) { ?>
	<script>
	jQuery(function() { 
	jQuery(document).tooltip();
	});
	</script>
<? }; ?>
<DIV class="toptitle ui-widget ui-widget-header ui-corner-all">
<IMG src="<?=SITE?>/rsc/DeconyApp.png"><H1 class="toptitle"><?=APPNAME." $title"?></H1>
</DIV>
<PRE id="DUMP" hidden>
</PRE>

<?
} 

//   _____ _____ _____ _____ _____ _____ _____ 
//  |_____|_____|_____|_____|_____|_____|_____|
//
function tailer() {
?>
<BR>
<BR>
<DIV class="BBUNCH">
<Button class="LINK MM" data-dest="./sensors.php">Sensors</button>
<Button class="LINK MM" data-dest="./scenes.php">Scenes</button>
<Button class="LINK MM" data-dest="./groups.php">Groups</button>
<Button class="LINK MM" data-dest="./lights.php">Lights</button>
<Button class="LINK MM" data-dest="./rules.php">Rules</button>
<Button class="LINK MM" data-dest="./config.php">Conf.</button>
<Button class="DEBUG" id="jsondump">jdump</button>
</DIV>
</BODY>
</HTML>
<?
}

}
?>
