// var $ = require("jquery");
$=require('jquery');
conf=require('./deconz-config.js');
ZIG=require('./deconz.js');
ZIG.setup(conf.DCBASE,conf.DCKEY);

console.log('Debut index.js browserifié npx browserify decony.js | minify --type js > bundle-min.js');
// console.log($);
/*
$(function() {
	$('#D1').slideDown();
	});
*/
