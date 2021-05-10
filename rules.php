<?php
include('./mini.inc.php');
include('App.php');
$app->header('Rules');
?>

<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{sensorid}}">
<TD class= "name"><A href="./rule.php?id={{sensorid}}&title={{name}}">{{name}}</A></TD><TD>{{modelid}}</TD><TD>{{config.reachable}}</TD><TD>{{config.battery}}</TD><TD>{{config.on}}</TD>
<TD>{{state.lastupdate}}</TD>
<TD>{{state.lowbattery}}</TD>
<TD>{{state.open}}</TD>
<TD>{{state.temperature}}</TD>
<TD>{{state.presence}}</TD>
</TR>
{{/rows}}
</TEMPLATE>

<TEMPLATE id='nope'>
<TR><TD colspan="4" class="info">Nope !</TD></TR>
</TEMPLATE>

<BR>
<TABLE id="OUT" class="DEFSHOW" hidden>
<THEAD>
<TR><TH>name</TH><TH>modelid</TH><TH>reachable</TH><TH>battery</TH><TH>on</TH>
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

<SCRIPT>
$(function() {
	ZIG.setDebug(true);
	ZIG.call('GET','/rules',jsondump);
	});
</SCRIPT>
<?
$app->tailer();
?>
