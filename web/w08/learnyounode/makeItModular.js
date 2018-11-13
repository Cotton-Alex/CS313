var fs = require('fs');

var lines = undefined;

function getlines(callback) {
	fs.readFile(process.argv[2], 'utf8', function doneReading(err, filecontents) {
		if (err) {
			return console.error(error);
		}
		lines = filecontents.split('\n').length - 1;
		callback(lines);
	});
}

function log(log) {
	console.log(log);
}

getlines(log);


    // var fs = require('fs')
    // var path = require('path')
    
    // var folder = process.argv[2]
    // var ext = '.' + process.argv[3]
    
    // fs.readdir(folder, function (err, files) {
    //   if (err) return console.error(err)
    //   files.forEach(function (file) {
    //     if (path.extname(file) === ext) {
    //       console.log(file)
    //     }
    //   })
    // })