<?php
include('./mini.inc.php');
include('App.php');

$title=T::gp('title','&lt;unset&gt;');
$app->header("Rule $title");
?>

<TEMPLATE id="CONDITION">
</TEMPLATE>

<TEMPLATE id='TPL'>
<FIELDSET class="fset ro">
<LEGEND>Rule information</LEGEND>
<LABEL>Name&nbsp;:</LABEL><INPUT readonly id="name" value="{{name}}"><BR>
<LABEL>Status&nbsp;:</LABEL><INPUT readonly id="status" value="{{status}}"><BR>
<LABEL>Period&nbsp;:</LABEL><INPUT readonly id="periodic" value="{{periodic}}"><BR>
<LABEL>Triggered count&nbsp;:</LABEL><INPUT readonly id="type" value="{{timestriggered}}"><BR>
<LABEL>Last triggered&nbsp;:</LABEL><INPUT readonly id="type" value="{{lasttriggered}}"><BR>
<LABEL>Conditions&nbsp;:</LABEL><TABLE id="conditions">
</TABLE><BR>
<LABEL>Actions&nbsp;:</LABEL><TABLE id="actions">
</TABLE><BR>

<INPUT readonly id="lastseen" value="{{lastseen}}"><BR>
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
	// ZIG.call('GET','/lights/'+id,TPLout);
	ZIG.call('GET','/lights/'+id,jsondump);
	});
</SCRIPT>
<?
$app->tailer();
?>
