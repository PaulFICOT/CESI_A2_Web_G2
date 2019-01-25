var db = require('../dbconnection'); //reference of dbconnection.js  
var Products = {  
    getAllProducts: function(callback) {  
        return db.query("SELECT * FROM Products", callback);  
    },  
    getProductsById: function(id, callback) {  
        return db.query("SELECT * FROM Products WHERE Id_product=?", [id], callback);  
    },  
    addProduct: function(Products, callback) {  
        return db.query("INSERT INTO Products (Product_name, Product_price, Product_description, Product_nbr_sold, Product_stock, Product_path_image, Id_category) VALUES(?,?,?,?,?,?,?)", [Orders.order_date, Orders.order_price, Orders.order_amount, Orders.id_user], callback);  
    },  
    deleteProduct: function(id, callback) {  
        return db.query("DELETE FROM Products WHERE Id_product=?", [id], callback);  
    },  
    updateProduct: function(id, Products, callback) {  
        return db.query("UPDATE Products SET Product_name=?, Product_price=?, Product_description=?, Product_nbr_sold=?, Product_stock=?, Product_path_image=? WHERE Id_product=?", [Orders.order_date, Orders.order_price, Orders.order_amount, Orders.id_user], callback); 
    }  
};  
module.exports = Products;  