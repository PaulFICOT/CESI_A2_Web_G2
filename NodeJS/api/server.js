//IMPORTS
var express = require('express');
var bodyParser = require('body-parser');
var apiRouter = require('./apiRouter').router;
//INSTANCIATE SERVER
var server = express();

//BODY PARSER CONFIGURATION
server.use(bodyParser.urlencoded({ extended: true}));
server.use(bodyParser.json());

//CONFIGURE ROUTES
server.get('/', function (req, res){
    res.setHeader('Content-Type', 'text/html');
    res.status(200).send('<h1>Server ON</h1>')
});

server.use('/api/', apiRouter);

//LAUNCH SERVER
server.listen(8080, function() {
    console.log('Listening server')
})