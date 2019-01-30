var db = require('../dbconnection'); //reference of dbconnection.js  
var Users = {  
    getAllUsers: function(callback) {  
        return db.query("SELECT * FROM users JOIN centers ON centers.Id_center = users.Id_center", callback);  
    },  
    getUsersById: function(id, callback) {  
        return db.query("SELECT * FROM users JOIN centers ON centers.Id_center = users.Id_center WHERE Id_user = 1;", [id], callback);  
    },  
    addUser: function(Users, callback) {  
        return db.query("INSERT INTO users(User_firstname, User_lastname, User_mail, User_password, User_status, User_isAdmin, Id_center) VALUES(?,?,?,?,?,?,?)", [Users.User_firstname, Users.User_lastname, Users.User_mail, Users.User_password, Users.User_status, Users.User_isAdmin, Users.Id_center], callback);  
    },  
    deleteUser: function(id, callback) {  
        return db.query("DELETE FROM users WHERE Id_user=?", [id], callback);  
    },  
    updateUser: function(id, Users, callback) {  
        return db.query("UPDATE users SET User_firstname=?, User_lastname=?, User_mail=?, User_password=?, User_status=?, User_isAdmin=?, Id_center=? WHERE id_user=?", [id, Users.User_firstname, Users.User_lastname, Users.User_mail, Users.User_password, Users.User_status, Users.User_isAdmin, Users.Id_center], callback); 
    }  
};  
module.exports = Users;  