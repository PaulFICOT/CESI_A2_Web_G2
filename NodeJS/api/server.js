//IMPORTS
var express = require('express');


//INSTANTIATE
var hostname = 'localhost';
var port = '3000';

var server = express();
var router_api = express.Router();

//ROUTES
router_api.route('')

//IMPLEMENT METHODS
//GET
.get(function(req, res){
    res.json({message: "Show", methode : req.method})
})

//POST
.post(function(req, res){
    res.json({message: "Add", methode : req.method})
})

//PUT
.put(function(req, res){
    res.json({message: "Update" , methode : req.method})
})
//DELETE
.delete(function(req, res){
    res.json({message: "Delete", methode : req.method})
})

server.use(router_api);

//LAUNCH SERVER
server.listen(port, hostname, function() {
    console.log("server OK sur http://" + hostname + ":" + port);
})