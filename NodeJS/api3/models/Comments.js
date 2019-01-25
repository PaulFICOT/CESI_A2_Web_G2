var db = require('../dbconnection'); //reference of dbconnection.js  
var Comments = {  
    getAllComments: function(callback) {  
        return db.query("SELECT * FROM Comments", callback);  
    },  
    getCommentsById: function(id, callback) {  
        return db.query("SELECT * FROM Comments WHERE Id_user=?", [id], callback);  
    },  
    addComment: function(Centers, callback) {  
        return db.query("INSERT INTO Comments(Id_photo, Comment_content) VALUES(?,?)", [Comments.id_photo, Comments.comment_content], callback);  
    },  
    deleteComment: function(id, callback) {  
        return db.query("DELETE FROM Comments WHERE Id_user=?", [id], callback);  
    },  
    updateComment: function(id, Centers, callback) {  
        return db.query("UPDATE Comments SET Id_photo=?, Comment_content? WHERE Id_user=?", [Comments.id_photo, Comments.comment_content], callback); 
    }  
};  
module.exports = Comments;  