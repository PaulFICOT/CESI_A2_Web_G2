'use strict';
module.exports = (sequelize, DataTypes) => {
  const Events = sequelize.define('Events', {
    Id_event: DataTypes.INTEGER,
    Event_title: DataTypes.STRING,
    Event_description: DataTypes.STRING,
    Event_comment: DataTypes.STRING,
    Event_approval: DataTypes.BOOLEAN,
    Event_date: DataTypes.STRING,
    Event_reccurence: DataTypes.BOOLEAN,
    Event_price: DataTypes.INTEGER,
    Event_voted: DataTypes.INTEGER,
    Event_period: DataTypes.STRING
  }, {});
  Events.associate = function(models) {
    // associations can be defined here
  };
  return Events;
};