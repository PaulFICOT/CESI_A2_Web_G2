//IMPORTS __________________________________________________________________________________________________
var express = require('express');
var bodyParser = require('body-parser');
var mysql = require('mysql');
var http = require('http');

//INSTANTIATE VAR __________________________________________________________________________________________
var server = express();
var router_api = express.Router();

var hostname = '127.0.0.1';
var port = 3000;

var dbname = 'dbbde';
var dbuser = 'root';
var dbpassword = 'root';

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

server.use(bodyParser.urlencoded({
    extended : true
}));
server.use(bodyParser.json());


//CREATE DB'S CONFIG
var dbbde = mysql.createConnection({
    host : hostname,
    user : dbuser,
    password : dbpassword,
    database : dbname
})
//LAUNCH SERVER AND DB
server.listen(port, hostname, function() {
    console.log("Le serveur fonctionne sur : http://" + hostname + ":" + port + "\n");   
});

dbbde.connect(function(err){
    if (err) throw err;
    console.log("Connected to the database");
});

server.get('/users', function(req, res){
    dbbde.query('SELECT * FROM Users', function(error, results, fields){
        if(error) throw error;
        res.end(JSON.stringify(results))
        console.log("ça marche");
    })

});