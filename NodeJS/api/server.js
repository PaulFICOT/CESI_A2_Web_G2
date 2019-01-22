//IMPORTS __________________________________________________________________________________________________
var express = require('express');
var bodyParser = require('body-parser');
var mysql = require('mysql');
var http = require('http');


//INSTANTIATE VAR __________________________________________________________________________________________
var app = express();
var router_api = express.Router();

var hostname = 'localhost';
var port = 3000;

var dbname = 'dbbde';
var dbuser = 'root';
var dbpassword = 'root';


//CONFIGURE ROUTES _________________________________________________________________________________________

//GLOBAL ROUTE API ______________________________________________________________________

//ALL HTTP REQUESTS
//ALL
app.all('/',function(req, res){
    res.json({
        message : "Bienvenue sur l'API du BDE !",
        methode : req.method
    });
})

//USERS ROUTE API _______________________________________________________________________
//GET
app.get('/users', function(req, res){
    dbbde.query('SELECT * FROM Users', function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//PUT
app.put('/users', function(req, res){
    dbbde.query('UPDATE Users SET' + $set + 'WHERE id = ?',[req.params.id_users], function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    }); 
})

//POST
app.post('/users', function(req, res){
    res.json({
        message : "Une ID est nécessaire pour effectuer une requête POST",
        methode : req.method
        });
})

//DELETE
app.delete('/users', function(req, res){
    dbbde.query('DELETE * FROM Users', function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//GLOBAL ROUTE API _______________________________________________________________________
//GET
app.get('/users/:id_users', function(req, res){
    dbbde.query('SELECT * FROM Users WHERE id_users = ?',[req.params.id_users], function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//PUT
app.put('/users/:id_users', function(req, res){
    res.json({
        message : "Vous souhaitez modifier les informations de l'étudiant n°" + req.params.id_users
    });
})

//POST
app.post('/users/:id_users', function(req, res){
    res.json({
        message : "Vous souhaitez ajouter un étudiant avec l'ID numéro n°" + req.params.id_users
    });
})

//DELETE
app.delete('/users/:id_users', function(req, res){
    dbbde.query('DELETE ',[req.params.id_users], function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})


//USE EXPRESS'S MODULES ____________________________________________________________________________________
app.use(router_api);

app.use(bodyParser.urlencoded({
    extended : true
}));

app.use(bodyParser.json());

//CREATE DB'S CONFIG
var dbbde = mysql.createConnection({
    host : hostname,
    user : dbuser,
    password : dbpassword,
    database : dbname
})

//LAUNCH SERVER AND DB
app.listen(port, hostname, function() {
    console.log("Server is running on : http://" + hostname + ":" + port + "\n");   
});

dbbde.connect(function(err){
    if (err) throw err;
    console.log("Connected to the database");
});