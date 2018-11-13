const http = require('http');
const fs = require('fs');

const hostname = '127.0.0.1';
const port = 8888;

fs.readFile('index.html', (err, html) => {
	if (err) {
		throw err;
	}

	const onRequest = http.createServer((req, res) => {
		res.statusCode = 200;
		res.setHeader('Content-type', 'text/html');
		res.write(html);
		res.end();
	});

	onRequest.listen(port, hostname, () => {
		console.log('Server started on port ' + port);
	});
});