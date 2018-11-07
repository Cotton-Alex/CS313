var directory = process.argv[2];
var extension = "." + process.argv[3];

var fs = require('fs')
var path = require('path')

fs.readdir(directory,function (err,list) {
	if (err) {
		return console.error(err);
	} 
})