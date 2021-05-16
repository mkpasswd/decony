<?php
include('./mini.inc.php');
include('App.php');
$app->header('Sensors');
?>
<!-- ==== DISPLAY ==================== -->
<BR>
<TABLE id="OUT" class="DEFSHOW" hidden>
<THEAD>
<TR>
<TH>name</TH>
<TH>modelid</TH>
<TH>reachable</TH>
<TH>battery</TH>
<TH>on</TH>
<TH>lastupdated</TH>
<TH>lowbattery</TH>
<TH>open</TH>
<TH>temperature</TH>
<TH>presence</TH>
</TR>
</THEAD>
<TBODY>
</TBODY>
</TABLE>

<!-- ==== TEMPLATE =================== -->
<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{id}}">
<TD class= "name"><A href="./sensor.php?id={{id}}&title={{name}}">{{name}}</A></TD><TD>{{modelid}}</TD><TD>{{config.reachable}}</TD><TD>{{config.battery}}</TD><TD>{{config.on}}</TD>
<TD>{{state.lastupdate}}</TD>
<TD>{{state.lowbattery}}</TD>
<TD>{{state.open}}</TD>
<TD>{{state.temperature}}</TD>
<TD>{{state.presence}}</TD>
</TR>
{{/rows}}
{{^rows}}
<TR><TD colspan="10" class="NOENTRY">Nope !</TD></TR>
{{/rows}}
</TEMPLATE>

<!-- ==== SCRIPT ==================== -->
<SCRIPT>
var WSPATH='/sensors';
var WSMETH='GET';

$(function() {
	// ZIG.setDebug(true);
	ZIG.call(WSMETH,WSPATH,ajs.arrayTPLout);
	});
</SCRIPT>
<?
$app->tailer();
?>
