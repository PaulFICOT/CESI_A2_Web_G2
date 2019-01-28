// IMPORTS
const http = require ('http');
const app = require('./app')

const port = process.env.PORT || 3000;
const hostname = localhost;

const server = http.createServer();

server.listen(port, hostname);
/*server.listen(port, (err) => {
    console.log('server is running on ' + port);
});*/