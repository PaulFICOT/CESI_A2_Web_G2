//IMPORTS __________________________________________________________________________________________________
var http = require('http');
var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

var server = app.listen(3000, 'localhost', function(){
    var host = server.address().address;
    var port = server.address().port;
});

var db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: 'root',
    database: 'dbbde'
});

db.connect(function(err){
    if(err) throw err;
    console.log('Connecté')
})

app.get('/users', function(req, res){
    db.query('select * from Users', function(error, results, fields){
        if(error) throw error;
        res.end(JSON.stringify(results));
    });
});