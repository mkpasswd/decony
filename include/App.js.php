<?php
include '../mini.inc.php';
// header('text/plain;charset=utf-8'); //php fpm : ERR 500 ??
?>
//<SCRIPT> //triggers vi's JS syntax higlighting

function tsort(tid,header) {
	console.log('TSORT -'+tid+'- -'+header+'-');
	var i=0;
	var hi=-1;
	$(tid+' THEAD TH').each(function () {
		// console.log($(this).html());
		if($(this).html()==header) {
			hi=i;
			return;
			};
		i++;
		});
	if(hi<0) return;
	hi++; //CSS : index de 1 à n
	// console.log('Tri sur colonne '+hi);
	var tab=[];	
	$(tid+' TBODY TR').each(function() {
		var key=$(this).children(':nth-child('+hi+')').data('sort');
		if(key==undefined) key=$(this).children(':nth-child('+hi+')').html();  //[hi].html();
		tab.push({key: key, value: $(this).html()});
		});
	console.log(tab);
	tab.sort(function(a,b) {return a.key>b.key;});
	$(tid+' TBODY').empty();
	tab.forEach(function (val) {
		$(tid+' TBODY').append('<TR>'+val.value+"</TR>\n");
		});
	}

$(function() {
	$('.LINK').click(function() {window.location=$(this).data('dest');});
	$('.TSORT').live('click',function(e) {
		console.log('Click sort');
		e.preventDefault();
		var idtable=$(this).closest('TABLE').attr('id');
		// console.log($(this).closest('TABLE'));
		// console.log("TABLE:"+idtable);
		tsort('#'+idtable,$(this).html());
		return false;
		});
	});
