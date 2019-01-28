var db = require('../dbconnection'); //reference of dbconnection.js  
var Events = {  
    getAllEvents: function(callback) {  
        return db.query("SELECT * FROM events", callback);  
    },  
    getEventsById: function(id, callback) {  
        return db.query("SELECT * FROM events WHERE id_event=?", [id], callback);  
    },  
    addEvent: function(Events, callback) {  
        return db.query("INSERT INTO events(Event_title, Event_description, Event_approval, Event_date, Event_recurrence, Event_price, Event_period, Event_location Id_user, Id_user_Users) VALUES(?,?,?,?,?,?,?,?,?,?,?)", [Events.Event_title, Events.Event_description, Events.Event_approval, Events.Event_date, Events.Event_recurrence, Events.Event_price, Events.Event_period, Events.Event_location, Events.Id_user, Id_user_Users], callback);  
    },  
    deleteEvent: function(id, callback) {  
        return db.query("DELETE FROM events WHERE id_event=?", [id], callback);  
    },  
    updateEvent: function(id, Events, callback) {  
        return db.query("UPDATE events SET event_title=?, event_description=?, event_approval=?, event_date=?, event_recurrence=?, event_price=?, event_voted=?, event_period=?, event_location=?, id_user=?, id_user_Users=? WHERE id_event=?", [Events.Event_title, Events.Event_description, Events.eventEvent_approval_approval, Events.Event_date, Events.Event_recurrence, Events.Event_price, Events.Event_period, Events.Event_location, Events.Id_user, Id_user_Users, id], callback); 
    }  
};  
module.exports = Events;  