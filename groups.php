<?php
include('./mini.inc.php');
include('App.php');
$app->header('Groups');
?>
<!-- ==== DISPLAY ==================== -->
<BR>
<TABLE id="OUT" class="DEFSHOW" hidden>
<THEAD>
<TR><TH>name</TH><TH>type</TH><TH>all_on</TH><TH>any_on</TH>
</TR>
</THEAD>
<TBODY>
</TBODY>
</TABLE>

<!-- ==== TEMPLATE =================== -->
<TEMPLATE id='TPL'>
{{#rows}}
<TR id="{{id}}">
<TD class= "name"><A href="./group.php?id={{id}}&title={{name}}">{{name}}</A></TD>
<TD>{{type}}</TD>
<TD>{{state.all_on}}</TD>
<TD>{{state.any_on}}</TD>
</TR>
{{/rows}}
{{^rows}}
<TR><TD colspan="5" class="NOENTRY">Nope !</TD></TR>
{{/rows}}
</TEMPLATE>

<!-- ==== SCRIPT ==================== -->
<SCRIPT>
var WSPATH='/groups';
var WSMETH='GET';

$(function() {
	// ZIG.setDebug(true);
	ZIG.call(WSMETH,WSPATH,ajs.arrayTPLout);
	});
</SCRIPT>
<?
$app->tailer();
?>
