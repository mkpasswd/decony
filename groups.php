<?php
include('./mini.inc.php');
include('App.php');
$app->header('Groups');
?>

<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{id}}">
<TD class= "name"><A href="./group.php?id={{id}}&title={{name}}">{{name}}</A></TD>
<TD>{{type}}</TD>
<TD>{{state.all_on}}</TD>
<TD>{{state.any_on}}</TD>
</TR>
{{/rows}}
</TEMPLATE>

<TEMPLATE id='nope'>
<TR><TD colspan="4" class="info">Nope !</TD></TR>
</TEMPLATE>

<BR>
<TABLE id="OUT" class="DEFSHOW" hidden>
<THEAD>
<TR><TH>name</TH><TH>type</TH><TH>all_on</TH><TH>any_on</TH>
</TR>
</THEAD>
<TBODY>
</TBODY>
</TABLE>

<SCRIPT>
$(function() {
	ZIG.setDebug(true);
	ZIG.call('GET','/groups',arrayTPLout);
	});
</SCRIPT>
<?
$app->tailer();
?>
