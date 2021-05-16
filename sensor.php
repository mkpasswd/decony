<?php
include('./mini.inc.php');
include('App.php');

$title=T::gp('title','&lt;unset&gt;');
$app->header("Sensor $title");
?>
<!-- ==== DISPLAY ==================== -->
<BR>
<DIV id="OUT" class="DEFSHOW" hidden>
</DIV>

<!-- ==== TEMPLATE =================== -->
<TEMPLATE id='TPL'>
<FIELDSET class="fset ro">
<LEGEND>Sensor information</LEGEND>
<LABEL>Name&nbsp;:</LABEL><INPUT readonly id="name" value="{{name}}"><BR>
<LABEL>Last seen&nbsp;:</LABEL><INPUT readonly id="lastseen" value="{{lastseen}}"><BR>
<LABEL>Last updated&nbsp;:</LABEL><INPUT readonly id="lastupdated" value="{{state.lastupdated}}"><BR>
<LABEL>Type&nbsp;:</LABEL><INPUT readonly id="type" value="{{type}}"><BR>
<LABEL>Manufacturer&nbsp;:</LABEL><INPUT readonly id="manufacturername" value="{{manufacturername}}"><BR>
<LABEL>Battery&nbsp;:</LABEL><INPUT readonly id="battery" value="{{config.battery}}"><BR>
<LABEL>On&nbsp;:</LABEL><INPUT readonly id="on" value="{{config.on}}"><BR>
<LABEL>Reachable&nbsp;:</LABEL><INPUT readonly id="reachable" value="{{config.reachable}}"><BR>
<LABEL>Model id&nbsp;:</LABEL><INPUT readonly id="modelid" value="{{modelid}}"><BR>
<LABEL>States&nbsp;:</LABEL><PRE id="states"></PRE><BR>
</SPAN><BR>

</FIELDSET>	
</TEMPLATE>

<!-- ==== SCRIPT ==================== -->
<SCRIPT>
var WSPATH='/sensors/'+DEVID;
var WSMETH='GET';

function show(ret) {
	ajs.TPLout(ret);
	$('#states').html(JSON.stringify(ret.state,null,2));
	}

$(function() {
	// ZIG.setDebug(true);
	ZIG.call(WSMETH,WSPATH,show);
	});
</SCRIPT>
<?
$app->tailer();
?>
