var db = require('../dbconnection'); //reference of dbconnection.js  
var Centers = {  
    getAllCenters: function(callback) {  
        return db.query("SELECT * FROM centers", callback);  
    },  
    getCentersById: function(id, callback) {  
        return db.query("SELECT * FROM centers WHERE Id_center=?", [id], callback);  
    },  
    addCenter: function(Centers, callback) {  
        return db.query("INSERT INTO centers (Center_name) VALUES(?)", [Centers.Center_name], callback);  
    },  
    deleteCenter: function(id, callback) {  
        return db.query("DELETE FROM centers WHERE Id_center=?", [id], callback);  
    },  
    updateCenter: function(id, Centers, callback) {  
        return db.query("UPDATE centers SET Center_name=? WHERE Id_center=?", [Centers.Center_name, id], callback); 
    }  
};  
module.exports = Centers;  