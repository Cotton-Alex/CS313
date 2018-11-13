var directory = process.argv[2];
var extension = "." + process.argv[3];

fs = require('fs');

fs.readdir(directory, function (err, list) {
	list.forEach(function (element, index) {
		if (element.includes(extension)) {
			console.log(element);
		}
	});
});



