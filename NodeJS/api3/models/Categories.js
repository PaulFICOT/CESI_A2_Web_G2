var db = require('../dbconnection'); //reference of dbconnection.js  
var Categories = {  
    getAllUsers: function(callback) {  
        return db.query("SELECT * FROM Categories", callback);  
    },  
    getUsersById: function(id, callback) {  
        return db.query("SELECT * FROM Categories WHERE Id_category=?", [id], callback);  
    },  
    addUser: function(Users, callback) {  
        return db.query("INSERT INTO Categories(Category_type) VALUES(?)", [Categories.category_type], callback);  
    },  
    deleteUser: function(id, callback) {  
        return db.query("DELETE FROM Categories WHERE Id_category=?", [id], callback);  
    },  
    updateUser: function(id, Users, callback) {  
        return db.query("UPDATE Categories SET Category_type=? WHERE Id_category=?", [Categories.category_type], callback); 
    }  
};  
module.exports = Categories;  