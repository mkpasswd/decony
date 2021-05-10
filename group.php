<?php
include('./mini.inc.php');
include('App.php');

$title=T::gp('title','&lt;unset&gt;');
$app->header("Group $title");
?>

<TEMPLATE id='TPL'>
<FIELDSET class="fset ro">
<LEGEND>Group information</LEGEND>
<LABEL>Name&nbsp;:</LABEL><INPUT readonly id="name" value="{{name}}"><BR>
<LABEL>All On&nbsp;:</LABEL><INPUT readonly id="all_on" value="{{state.all_on}}"><BR>
<LABEL>Any On&nbsp;:</LABEL><INPUT readonly id="any_on" value="{{state.any_on}}"><BR>
<LABEL>Type&nbsp;:</LABEL><INPUT readonly id="type" value="{{type}}"><BR>
<LABEL>Scenes&nbsp;:</LABEL><SPAN>
{{#scenes}}
<A href="./scene.php?id={{.}}">{{.}}</A>
{{/scenes}}
</SPAN><BR>
<LABEL>Lights&nbsp;:</LABEL><SPAN>
{{#lights}}
<A href="./light.php?id={{.}}">{{.}}</A>
{{/lights}}
</SPAN><BR>

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
	ZIG.call('GET','/groups/'+id,TPLout);
	});
</SCRIPT>
<?
$app->tailer();
?>
