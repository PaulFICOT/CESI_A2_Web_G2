var db = require('../dbconnection'); //reference of dbconnection.js  
var Photos = {  
    getAllPhotos: function(callback) {  
        return db.query("SELECT * FROM Photos", callback);  
    },  
    getPhotosById: function(id, callback) {  
        return db.query("SELECT * FROM Photos WHERE Id_photo=?", [id], callback);  
    },  
    addPhoto: function(Photos, callback) {  
        return db.query("INSERT INTO Photos(Photo_name, Photo_is_public, Id_photo) VALUES(?,?,?)", [Photos.photo_name, Photos.photo_is_public, Photos.id_event], callback);  
    },  
    deletePhoto: function(id, callback) {  
        return db.query("DELETE FROM Photos WHERE Id_photo=?", [id], callback);  
    },  
    updatePhoto: function(id, Photos, callback) {  
        return db.query("UPDATE Photos SET Photo_name=?, Photo_is_public=?, Id_photo=? WHERE Id_photo=?", [Photos.photo_name, Photos.photo_is_public, Photos.id_event], callback); 
    }  
};  
module.exports = Photos;  