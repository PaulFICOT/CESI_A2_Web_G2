var db = require('../dbconnection'); //reference of dbconnection.js  
var Users = {  
    getAllUsers: function(callback) {  
        return db.query("SELECT * FROM users", callback);  
    },  
    getUsersById: function(id, callback) {  
        return db.query("SELECT * FROM users WHERE Id_user=?", [id], callback);  
    },  
    addUser: function(Users, callback) {  
        return db.query("INSERT INTO users(User_firstname, User_lastname, User_mail, User_password, User_status, Id_center) VALUES(?,?,?,?,?,?,?)", [Users.user_firstname, Users.user_lastname, Users.user_mail, Users.user_password, Users.user_status, Users.id_center], callback);  
    },  
    deleteUser: function(id, callback) {  
        return db.query("DELETE FROM users WHERE Id_user=?", [id], callback);  
    },  
    updateUser: function(id, Users, callback) {  
        return db.query("UPDATE users SET User_firstname=?, User_lastname=?, User_mail=?, User_password=?, User_status=?, Id_center=? WHERE id_user=?", [Users.user_firstname, Users.user_lastname, Users.user_mail, Users.user_password, Users.user_status, Users.id_center], callback); 
    }  
};  
module.exports = Users;  