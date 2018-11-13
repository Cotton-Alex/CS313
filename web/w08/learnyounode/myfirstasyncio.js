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