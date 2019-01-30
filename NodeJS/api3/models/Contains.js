var db = require('../dbconnection'); //reference of dbconnection.js  
var Contains = {  
    getAllContains: function(callback) {  
        return db.query("SELECT * FROM Containz", callback);  
    },  
    getContainsById: function(id, callback) {  
        return db.query("SELECT * FROM Containz WHERE Id_order=?", [id], callback);  
    },  
    addContain: function(Contains, callback) {  
        return db.query("INSERT INTO Containz(Id_photo) VALUES(?)", [Containz.Id_photo], callback);  
    },  
    deleteContain: function(id, callback) {  
        return db.query("DELETE FROM Containz WHERE Id_order=?", [id], callback);  
    },  
    updateContain: function(id, Contains, callback) {  
        return db.query("UPDATE Containz SET Id_photo=? WHERE Id_order=?", [Containz.Id_photo, id], callback); 
    }  
};  
module.exports = Contains;  