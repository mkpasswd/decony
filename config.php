<?php
include('./mini.inc.php');
include('App.php');

$app->header("Config");
?>

<TEMPLATE id='TPL'>
<FIELDSET class="fset ro">
<LEGEND>Adapter information</LEGEND>
<LABEL>Name&nbsp;:</LABEL><INPUT readonly id="name" value="{{name}}"><BR>
<LABEL>Device name&nbsp;:</LABEL><INPUT readonly id="devicename" value="{{devicename}}"><BR>
<LABEL>Model ID&nbsp;:</LABEL><INPUT readonly id="modelid" value="{{modelid}}"><BR>
<LABEL>Local time&nbsp;:</LABEL><INPUT readonly id="localtime" value="{{localtime}}"><BR>
<LABEL>IP&nbsp;:</LABEL><INPUT readonly id="ipaddress" value="{{ipaddress}}"><BR>
<LABEL>API Version&nbsp;:</LABEL><INPUT readonly id="apiversion" value="{{apiversion}}"><BR>
<LABEL>Whitelist&nbsp;:</LABEL><UL>
{{#whitelist}}
<LI>{{name}} &dash; <TT>{{id}}</TT></LI>
{{/whitelist}}
</UL><BR>
</FIELDSET>	
</TEMPLATE>

<BR>
<DIV id="OUT" class="DEFSHOW" hidden>
</DIV>

<SCRIPT>
show=function(ret) {
	// console.log(ret);
	ret.whitelist=tomustab(ret.whitelist);
	TPLout(ret);
	};
$(function() {
	ZIG.setDebug(true);
	ZIG.call('GET','/config',show);
	});
</SCRIPT>
<?
$app->tailer();
?>
