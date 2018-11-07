// console.log('HELLO WORLD')

// var i;
// var sum = 0;
// for(i=2; i < process.argv.length; i++){
	// sum += Number(process.argv[i]);
// };
// console.log(sum);

 // var fs = require('fs');
 // var stuff = fs.readFileSync(process.argv[2]);
 // var str = stuff.toString();
 // var array = str.split('\n');
 // console.log(array.length - 1);
 
   // // var fs = require('fs')
    // // var file = process.argv[2]

    // // fs.readFile(file, function (err, contents) {
      // // if (err) {
        // // return console.log(err)
      // // }
      // // // fs.readFile(file, 'utf8', callback) can also be used
      // // var lines = contents.toString().split('\n').length - 1
      // // console.log(lines)
    // // })

	
 // var fs = require('fs')
// var stuff = fs.readFile(process.argv[2], countFile);

// function countFile (err, data){
// var str = data.toString()
// var array = str.split('\n')
// console.log(array.length - 1)
// }


// var fs = require('fs')
// var path = require('path')
// var dir = process.argv[2]
// var ext = process.argv[3]
// fs.readdir(dir, listfiles);

// function listfiles(err, list){
	// list.forEach(file => {
		// if(path.extname(file) === "." + ext){
			// console.log(file);
		// }
	// });
// }

// var module = require('./module.js')
// var dir = process.argv[2]
// var filterStr = process.argv[3]
// module(dir, filterStr, function(err, list){
	// if(err){
		// return consle.error('There was an error:', err)
	// }
	// list.forEach(function (file){
		// console.log(file)
	// })
// })

var http = require('http')

http.get(process.argv[2], function(response){
	response.setEncoding('utf8')
	response.on('data', console.log)
	response.on('error', console.error)
}).on('error', console.error)