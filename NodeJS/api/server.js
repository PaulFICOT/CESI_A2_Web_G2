//IMPORTS __________________________________________________________________________________________________
var express = require('express');
var bodyParser = require('body-parser');
var mysql = require('mysql');
var http = require('http');


//INSTANTIATE VAR __________________________________________________________________________________________
var app = express();

var hostname = 'localhost';
var port = 3000;

var dbname = 'dbbde';
var dbuser = 'root';
var dbpassword = 'root';


//CONFIGURE ROUTES _________________________________________________________________________________________

//GLOBAL ROUTE API ______________________________________________________________________

//ALL HTTP REQUESTS
//ROOT
app.all('/',function(req, res){
    res.json({
        message : "Bienvenue sur l'API du BDE !",
        methode : req.method
    });
})

//USERS PUBLIC BDE API _______________________________________________________________________
//GET ALL USERS
app.get('/users', function(req, res){
    dbbde.query('SELECT * FROM Users', function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//GET USER BY ID
app.get('/users/:id_users', function(req, res){
    dbbde.query('SELECT * FROM Users WHERE id_users = ?',[req.params.id_users], function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//GET USER BY ID
app.get('/users/:id_users', function(req, res){
    dbbde.query('SELECT * FROM Users WHERE id_users = ?',[req.params.id_users], function(error, results, fields){
        if(error) return res.status(500).send("Un problème est survenu lors de la recherche des utilisateurs.");
        res.status(200).end(JSON.stringify(results));
    });
})

//USE EXPRESS'S MODULES ____________________________________________________________________________________

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