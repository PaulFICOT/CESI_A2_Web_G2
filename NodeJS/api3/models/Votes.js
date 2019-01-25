var db = require('../dbconnection'); //reference of dbconnection.js  
var Votes = {  
    getAllVotes: function(callback) {  
        return db.query("SELECT * FROM Votes", callback);  
    },  
    getVotesById: function(id, callback) {  
        return db.query("SELECT * FROM Votes WHERE Id_event=?", [id], callback);  
    },  
    addVote: function(Votes, callback) {  
        return db.query("INSERT INTO Votes (Id_event) VALUES(?)", [Votes.Id_user], callback);  
    },  
    deleteVote: function(id, callback) {  
        return db.query("DELETE FROM Votes WHERE Id_event=?", [id], callback);  
    },  
    updateVote: function(id, Votes, callback) {  
        return db.query("UPDATE Votes SET Id_user=? WHERE Id_event=?", [id, Votes.Id_user], callback); 
    }  
};  
module.exports = Votes;  