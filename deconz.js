ZIG=function () {};

ZIG.errn=0;
ZIG.errstr='';
ZIG.debug=false;

// ZIG.debline=function(s) {if(this.debug) console.log('## '+s);};

ZIG.setDebug=function(b) {
	this.debug=b;
	this.debline('Debug ON');
	};
ZIG.getErrStr=function() { return this.errstr;};
ZIG.getErrNum=function() { return this.errn;};
ZIG.getErrCombo=function() { return '['+this.errn+'] '+this.errstr;};
ZIG.setErr=function(num,str) {
	this.errn=num;
	this.errstr=str;
	return (num==0);
	};

ZIG.deconne=function() {return (this.errn!=0);};
ZIG.wtf=function() {return this.deconne();};

ZIG.clearErr=function() {this.setErr(0,'')};

ZIG.setup=function(base,key) {
	this.BASE=base;
	this.KEY=key;
	$.ajaxSetup({
		//crossDomain: false
		dataType: 'json',
		timeout: 5000,
		error: this.foirage
		});
	};

ZIG.dump=function() {console.log('BASE='+this.BASE+', KEY='+this.KEY);};
ZIG.foirage=function(xhr,textStatus,errorThrown) {
	this.debline('Foirage '+textStatus+', '+errorThrown);
	this.setErr(42,'WS Call error');
	};

ZIG.defaultSuccess=function(ret,textStatus) {
	console.log('WS success');
	this.debline(ret);
	};

ZIG.call=function(method,ws,f=this.defaultSuccess,content=null) {
	parms={};
	parms.method=method;
	if(content!=null) parms.data=JSON.stringify(content);
	if(typeof f=='function') parms.success=f;
	var url=this.BASE+'/'+this.KEY+ws,parms;
	this.debline('Calling '+url+' ('+method+')')
	$.ajax(url,parms);
	}

module.exports = {
	setup: ZIG.setup,
	dump: ZIG.dump,
	getErrStr: ZIG.getErrStr,
	getErrNum: ZIG.getErrNum,
	getErrCombo: ZIG.getErrCombo,
	setErr: ZIG.setErr,
	setDebug: ZIG.setDebug,
	call: ZIG.call,
	clearErr: ZIG.clearErr,
	deconne: ZIG.deconne,
	wtf: ZIG.wtf	
	};

