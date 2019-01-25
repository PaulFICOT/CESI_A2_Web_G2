var db = require('../dbconnection'); //reference of dbconnection.js  
var Events = {  
    getAllEvents: function(callback) {  
        return db.query("SELECT * FROM events", callback);  
    },  
    getEventsById: function(id, callback) {  
        return db.query("SELECT * FROM events WHERE id_event=?", [id], callback);  
    },  
    addEvent: function(Event, callback) {  
        return db.query("INSERT INTO events(Event_title, Event_description, Event_approval, Event_date, Event_recurrence, Event_price, Event_period, Event_location Id_user, Id_user_Users) VALUES(?,?,?,?,?,?,?,?,?,?,?)", [Event.event_title, Event.event_description, Event.event_approval, Event.event_date, Event.event_recurrence, Event.event_price, Event.event_period, Event.event_location, Event.Id_user, Id_user_Users], callback);  
    },  
    deleteEvent: function(id, callback) {  
        return db.query("DELETE FROM events WHERE id_event=?", [id], callback);  
    },  
    updateEvent: function(id, Event, callback) {  
        return db.query("UPDATE events SET event_title=?, event_description=?, event_approval=?, event_date=?, event_recurrence=?, event_price=?, event_voted=?, event_period=?, event_location=?, id_user=?, id_user_Users=? WHERE id_event=?", [Event.event_title, Event.event_description, Event.event_approval, Event.event_date, Event.event_recurrence, Event.event_price, Event.event_period, Event.event_location, Event.Id_user, Id_user_Users], callback); 
    }  
};  
module.exports = Events;  