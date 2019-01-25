var db = require('../dbconnection'); //reference of dbconnection.js  
var Centers = {  
    getAllCenters: function(callback) {  
        return db.query("SELECT * FROM Centers", callback);  
    },  
    getCentersById: function(id, callback) {  
        return db.query("SELECT * FROM Centers WHERE Id_center=?", [id], callback);  
    },  
    addCenter: function(Centers, callback) {  
        return db.query("INSERT INTO Centers(Center_name) VALUES(?)", [Centers.Center_name], callback);  
    },  
    deleteCenter: function(id, callback) {  
        return db.query("DELETE FROM Centers WHERE Id_center=?", [id], callback);  
    },  
    updateCenter: function(id, Centers, callback) {  
        return db.query("UPDATE Centers SET Center_name=? WHERE Id_center=?", [Centers.Center_name, id], callback); 
    }  
};  
module.exports = Centers;  