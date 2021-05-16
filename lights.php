<?php
include('./mini.inc.php');
include('App.php');
$app->header('Lights');
?>

<!-- ==== MUSTACHE TEMPLATE -->
<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{id}}">
<TD class= "name"><A href="./light.php?id={{id}}&title={{name}}">{{name}}</A></TD><TD>{{modelid}}</TD><TD>{{config.reachable}}</TD><TD>{{config.battery}}</TD><TD>{{config.on}}</TD>
<TD>{{state.lastupdate}}</TD>
<TD>{{state.lowbattery}}</TD>
<TD>{{state.open}}</TD>
<TD>{{state.temperature}}</TD>
<TD>{{state.presence}}</TD>
</TR>
{{/rows}}
{{^rows}}
<TR><TD colspan="5" class="info">Nope !</TD></TR>
{{/rows}}
</TEMPLATE>

<BR>
<!-- ==== TABLE HEADER -->
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
	ZIG.call('GET','/lights',arrayTPLout);
	// ZIG.call('GET','/lights',jsondump);
	});
</SCRIPT>
<?
$app->tailer();
?>
