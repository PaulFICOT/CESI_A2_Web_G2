var db = require('../dbconnection'); //reference of dbconnection.js  
var Products = {  
    getAllProducts: function(callback) {  
        return db.query("SELECT * FROM Products", callback);  
    },  
    getProductsById: function(id, callback) {  
        return db.query("SELECT * FROM Products WHERE Id_product=?", [id], callback);  
    },  
    addProduct: function(Products, callback) {  
        return db.query("INSERT INTO Products (Product_name, Product_price, Product_description, Product_nbr_sold, Product_stock, Product_path_image, Id_category) VALUES(?,?,?,?,?,?,?)", [Products.Product_name, Products.Product_price, Products.Product_description, Products.Product_nbr_sold, Products.Product_stock, Products.Product_path_image, Products.Id_category], callback);  
    },  
    deleteProduct: function(id, callback) {  
        return db.query("DELETE FROM Products WHERE Id_product=?", [id], callback);  
    },  
    updateProduct: function(id, Products, callback) {  
        return db.query("UPDATE Products SET Product_name=?, Product_price=?, Product_description=?, Product_nbr_sold=?, Product_stock=?, Product_path_image=? WHERE Id_product=?", [id, Products.Product_name, Products.Product_price, Products.Product_description, Products.Product_nbr_sold, Products.Product_stock, Products.Product_path_image, Products.Id_category], callback); 
    }  
};  
module.exports = Products;  