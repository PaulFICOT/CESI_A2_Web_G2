var db = require('../dbconnection'); //reference of dbconnection.js  
var Comments = {  
    getAllComments: function(callback) {  
        return db.query("SELECT * FROM Comments", callback);  
    },  
    getCommentsById: function(id, callback) {  
        return db.query("SELECT * FROM Comments WHERE Id_user=?", [id], callback);  
    },  
    addComment: function(Comments, callback) {  
        return db.query("INSERT INTO Comments(Id_photo, Comment_content) VALUES(?,?)", [Comments.Id_photo, Comments.Comment_content], callback);  
    },  
    deleteComment: function(id, callback) {  
        return db.query("DELETE FROM Comments WHERE Id_user=?", [id], callback);  
    },  
    updateComment: function(id, Comments, callback) {  
        return db.query("UPDATE Comments SET Id_photo=?, Comment_content? WHERE Id_user=?", [Comments.Id_photo, Comments.Comment_content, id], callback); 
    }  
};  
module.exports = Comments;  