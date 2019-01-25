var db = require('../dbconnection'); //reference of dbconnection.js  
var Signs_in = {  
    getAllSigns_in: function(callback) {  
        return db.query("SELECT * FROM Signs_in", callback);  
    },  
    getSigns_inById: function(id, callback) {  
        return db.query("SELECT * FROM Orders WHERE Id_event=?", [id], callback);  
    },  
    addSign_in: function(Orders, callback) {  
        return db.query("INSERT INTO Orders (Id_user) VALUES(?)", [Signs_in.Id_user], callback);  
    },  
    deleteSign_in: function(id, callback) {  
        return db.query("DELETE FROM Orders WHERE Id_event=?", [id], callback);  
    },  
    updateSign_in: function(id, Orders, callback) {  
        return db.query("UPDATE Orders SET Id_user=? WHERE Id_event=?", [Signs_in.Id_user], callback); 
    }  
};  
module.exports = Signs_in;  