'use strict';
module.exports = (sequelize, DataTypes) => {
  const Orders = sequelize.define('Orders', {
    Id_order: DataTypes.INTEGER,
    Order_date: DataTypes.STRING,
    Order_price: DataTypes.INTEGER,
    Order_amount: DataTypes.INTEGER
  }, {});
  Orders.associate = function(models) {
    // associations can be defined here
  };
  return Orders;
};