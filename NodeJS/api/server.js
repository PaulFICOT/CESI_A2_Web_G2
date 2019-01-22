//IMPORTS __________________________________________________________________________________________________
var express = require('express');
var bodyParser = require('body-parser');

//INSTANTIATE VAR __________________________________________________________________________________________
var server = express();
var router_api = express.Router();

var hostname = 'localhost';
var port = 3000;

//CONFIGURE ROUTES _________________________________________________________________________________________
//GLOBAL STUDENT ROUTE API ______________________________________________________________________
router_api.route('/students')

//GET, POST, PUT, DELETE HTTP REQUESTS
//GET
.get(function(req, res){
    res.json({
        message : "Liste des étudiants",
        methode : req.method
    });
})

//POST
.post(function(req, res){
    res.json({
        message : "Ajouter des étudiant",
        methode : req.method
    });
})

//PUT
.put(function(req, res){
    res.json({
        message : "Modifier un étudiant",
        methode : req.method
    });
})

//DELETE
.delete(function(req, res){
    res.json({
        message : "Supprimer un étudiant",
        methode : req.method
    });
})


//ROUTE FOR OUR API ______________________________________________________________________
router_api.route('/students/:student_id')

//GET, PUT, DELETE HTTP REQUESTS
//GET
.get(function(req, res){
    res.json({
        message : "Vous souhaitez accéder aux informations de l'étudiant n°" + req.params.student_id
    });
})

//PUT
.put(function(req, res){
    res.json({
        message : "Vous souhaitez modifier les informations de l'étudiant n°" + req.params.student_id
    });
})

//DELETE
.delete(function(req, res){
    res.json({
        message : "Vous souhaitez supprimer les informations de l'étudiant n°" + req.params.student_id
    });
})


//GLOBAL ROUTE API _______________________________________________________________________
router_api.route('/')

//ALL HTTP REQUESTS
//ALL
.all(function(req, res){
    res.json({
        message : "Bienvenue sur l'API du BDE !", methode : req.method
    });
})


//USE EXPRESS'S MODULES
server.use(router_api);

server.use(bodyParser.urlencoded({ extended : false}));
server.use(bodyParser.json());

//LAUNCH SERVER
server.listen(port, hostname, function() {
    console.log("Le serveur fonctionne sur : http://" + hostname + ":" + port + "\n");   
});