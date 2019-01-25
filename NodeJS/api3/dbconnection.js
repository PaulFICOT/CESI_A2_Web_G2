//MODULE DEPENDENCIES
var mysql = require("mysql");

//DATABASE INFOS
var db_name = 'dbbde';
var db_user = 'root';
var db_password = 'root';
var db_host = 'localhost';

//DATABASE CONNECTION
var connection = mysql.createConnection({
  host: db_host,
  user: db_user,
  password: db_password,
  database: db_name
});

module.exports = connection;