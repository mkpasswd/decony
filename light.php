<?php
include('./mini.inc.php');
include('App.php');

$title=T::gp('title','&lt;unset&gt;');
$app->header("Light $title");
?>

<TEMPLATE id='TPL'>
<FIELDSET class="fset ro">
<LEGEND>Light information</LEGEND>
<LABEL>Name&nbsp;:</LABEL><INPUT readonly id="name" value="{{name}}"><BR>
<LABEL>Model ID&nbsp;:</LABEL><INPUT readonly id="modelid" value="{{modelid}}"><BR>
<LABEL>Type&nbsp;:</LABEL><INPUT readonly id="type" value="{{type}}"><BR>
<LABEL>Last seen&nbsp;:</LABEL><INPUT readonly id="lastseen" value="{{lastseen}}"><BR>
<LABEL>On&nbsp;:</LABEL><INPUT readonly id="on" value="{{state.on}}"><BR>
<LABEL>Reachable&nbsp;:</LABEL><INPUT readonly id="reachable" value="{{state.reachable}}"><BR>
</FIELDSET>	
</TEMPLATE>

<BR>
<DIV id="OUT" class="DEFSHOW" hidden>
</DIV>

<SCRIPT>
const urlParams=new URLSearchParams(window.location.search);
var id=urlParams.get('id');
console.log(id);

$(function() {
	ZIG.setDebug(true);
	ZIG.call('GET','/lights/'+id,TPLout);
	});
</SCRIPT>
<?
$app->tailer();
?>
