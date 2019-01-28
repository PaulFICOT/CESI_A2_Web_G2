var db = require('../dbconnection'); //reference of dbconnection.js  
var Categories = {  
    getAllCategories: function(callback) {  
        return db.query("SELECT * FROM categories", callback);  
    },  
    getCategoriesById: function(id, callback) {  
        return db.query("SELECT * FROM categories WHERE Id_category=?", [id], callback);  
    },  
    addCategory: function(Categories, callback) {  
        return db.query("INSERT INTO categories (Category_type) VALUES(?)", [Categories.Category_type], callback);  
    },  
    deleteCategory: function(id, callback) {  
        return db.query("DELETE FROM categories WHERE Id_category=?", [id], callback);  
    },  
    updateCategory: function(id, Categories, callback) {  
        return db.query("UPDATE categories SET Category_type=? WHERE Id_category=?", [Categories.Category_type, id], callback); 
    }  
};  
module.exports = Categories;  