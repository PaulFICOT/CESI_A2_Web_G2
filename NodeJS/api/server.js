//IMPORTS
var express = require('express');

//INSTANTIATE SERVER
var server = express();

//CONFIGURE ROUTES
server.get('/', function (req, res) {
    res.setHeader('Content-Type', 'text/html');
    res.status(200).send('<h1>Test server</h1>');
});

//LAUNCH SERVER
server.listen(8080, function() {
    console.log("server OK");
    
})