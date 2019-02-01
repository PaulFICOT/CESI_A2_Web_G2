var db = require('../dbconnection'); //reference of dbconnection.js  
var Eventz = {  
    getAllEvents: function(callback) {  
        return db.query("SELECT * FROM eventz WHERE eventz.Event_approval=1", callback);  // JOIN users ON users.Id_users = eventz.
    },  
    getEventsById: function(id, callback) {  
        return db.query("SELECT * FROM eventz WHERE eventz.Event_approval = 1 AND eventz.Id_event=?", [id], callback);  // JOIN users ON users.Id_users = eventz.Id_user eventz
    },  
    addEvent: function(Eventz, callback) {  
        return db.query("INSERT INTO eventz(Event_title, Event_description, Event_approval, Event_date, Event_recurrence, Event_price, Event_period, Event_location, Id_user) VALUES(?,?,?,?,?,?,?,?,?)", [Eventz.Event_title, Eventz.Event_description, Eventz.Event_approval, Eventz.Event_date, Eventz.Event_recurrence, Eventz.Event_price, Eventz.Event_period, Eventz.Event_location, Eventz.Id_user], callback);  
    },  
    deleteEvent: function(id, callback) {  
        return db.query("DELETE FROM eventz WHERE id_event=?", [id], callback);  
    },  
    updateEvent: function(id, Eventz, callback) {  
        return db.query("UPDATE eventz SET Event_title=?, Event_description=?, Event_approval=?, Event_date=?, Event_recurrence=?, Event_price=?, Event_period=?, Event_location=?, Id_user=? WHERE Id_event=?", [Eventz.Event_title, Eventz.Event_description, Eventz.eventEvent_approval_approval, Eventz.Event_date, Eventz.Event_recurrence, Eventz.Event_price, Eventz.Event_period, Eventz.Event_location, Eventz.Id_user, id], callback); 
    }  
};  
module.exports = Eventz;  