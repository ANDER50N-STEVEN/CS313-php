const http = require('http');
var fs = require('fs');
var data = fs.readFileSync('helloWorld.html');

function hello(req, res){
	if(req.url === '/home'){
		res.write('Welcome to the Home Page');
		console.log('received a request for: ' + req.url);
	}
	else if(req.url === '/getData'){
		let student = {  
			name: 'Steven',
			professor: 'Br. Burton',
			class: 'cs313' 
			};
			
		let data = JSON.stringify(student, null, 2);
		fs.writeFileSync('student.json', data);
	}
	else{
		
		res.setHeader('Content-type', 'text/html');
		res.write(data);
	}
	res.end();
}

var server = http.createServer(hello);
server.listen(3000);

console.log('the server is now listenening on port 3000');