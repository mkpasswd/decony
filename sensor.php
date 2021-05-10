<?php
include('./mini.inc.php');
include('App.php');

$title=T::gp('title','&lt;unset&gt;');
$app->header("Sensor $title");
?>

<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{sensorid}}"><TD>{{name}}</TD><TD>{{modelid}}</TD><TD>{{config.reachable}}</TD><TD>{{config.battery}}</TD><TD>{{config.on}}</TD>
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
const urlParams=new URLSearchParams(window.location.search);
var id=urlParams.get('id');

show=function(ret) {
	console.log(ret);
	var tpl=$('#TPL').html();
	var tab=[];
	for (var prop in ret) {
		if (ret.hasOwnProperty(prop)) {
			var line=ret[prop];
			line.sensorid=prop;
			tab.push(line)
			};
		};
	// console.log(tab);
	// console.log({rows: ret});
	// console.log(Mustache.render(tpl,{rows: tab}));
	$('#OUT TBODY').html(Mustache.render(tpl,{rows: tab}));
	$('#OUT').slideDown();
	};
$(function() {
	ZIG.setDebug(true);
	ZIG.call('GET','/sensors/'+id,jsondump);
	});
</SCRIPT>
<?
$app->tailer();
?>
