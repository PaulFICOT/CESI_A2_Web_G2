var db = require('../dbconnection'); //reference of dbconnection.js  
var Contains = {  
    getAllContains: function(callback) {  
        return db.query("SELECT * FROM Contains", callback);  
    },  
    getContainsById: function(id, callback) {  
        return db.query("SELECT * FROM Contains WHERE Id_order=?", [id], callback);  
    },  
    addContain: function(Contains, callback) {  
        return db.query("INSERT INTO Contains(Id_photo) VALUES(?)", [Contains.Id_photo], callback);  
    },  
    deleteContain: function(id, callback) {  
        return db.query("DELETE FROM Contains WHERE Id_order=?", [id], callback);  
    },  
    updateContain: function(id, Contains, callback) {  
        return db.query("UPDATE Contains SET Id_photo=? WHERE Id_order=?", [Contains.Id_photo, id], callback); 
    }  
};  
module.exports = Contains;  