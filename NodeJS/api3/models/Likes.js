var db = require('../dbconnection'); //reference of dbconnection.js  
var Likes = {  
    getAllLikes: function(callback) {  
        return db.query("SELECT * FROM Likes", callback);  
    },  
    getLikesById: function(id, callback) {  
        return db.query("SELECT * FROM Likes WHERE Id_photo=?", [id], callback);  
    },  
    addLike: function(Likes, callback) {  
        return db.query("INSERT INTO Likes(Id_user) VALUES(?)", [Likes.Id_user], callback);  
    },  
    deleteLike: function(id, callback) {  
        return db.query("DELETE FROM Likes WHERE Id_photo=?", [id], callback);  
    },  
    updateLike: function(id, Likes, callback) {  
        return db.query("UPDATE Likes SET Id_user=? WHERE Id_photo=?", [Likes.Id_user], callback); 
    }  
};  
module.exports = Likes;  