//[npx ]browserify bundle-spec.js | minify --type js > include/bundle-min.js
// jQuery=require('jquery'),require('jquery-ui');
jQuery=require('jquery'),require('jquery-ui-bundle');
// jQuery=require('jquery');
// jQueryUI=require('jquery-ui-browserify');
$=jQuery;
// require('./jquery-ui/themes/base/all.css');
// require('jquery-ui-themes/themes/redmond/theme.css');
// require('jquery-ui-dist/');
conf=require('./include/deconz-config.js');
ZIG=require('./include/deconz.js');
ZIG.setup(conf.DCBASE,conf.DCKEY);
Mustache=require('mustache'); 
