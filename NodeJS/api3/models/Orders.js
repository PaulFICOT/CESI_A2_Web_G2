var db = require('../dbconnection'); //reference of dbconnection.js  
var Orders = {  
    getAllOrders: function(callback) {  
        return db.query("SELECT * FROM Orders", callback);  
    },
    getOrdersById: function(id, callback) {  
        return db.query("SELECT * FROM Orders WHERE Id_order=?", [id], callback);  
    },
    addOrder: function(Orders, callback) {  
        return db.query("INSERT INTO Orders (Order_date, Order_price, Order_amount, Id_user) VALUES(?,?,?,?)", [Orders.Order_date, Orders.Order_price, Orders.Order_amount, Orders.Id_user], callback);  
    },
    deleteOrder: function(id, callback) {  
        return db.query("DELETE FROM Orders WHERE Id_order=?", [id], callback);  
    },
    updateOrder: function(id, Orders, callback) {  
        return db.query("UPDATE Orders SET Order_date=?, Order_price=?, Order_amount=?, Id_user=? WHERE Id_order=?", [Orders.Order_date, Orders.Order_price, Orders.Order_amount, Orders.Id_user, id], callback); 
    }
};
module.exports = Orders;