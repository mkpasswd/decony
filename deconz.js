ZIG=function () {};

ZIG.setup=function(base,key) {
	this.BASE=base;
	this.KEY=key;
	}
ZIG.dump=function() {console.log('BASE='+this.BASE+', KEY='+this.KEY);}

module.exports = {
	setup: ZIG.setup,
	dump: ZIG.dump
	};

