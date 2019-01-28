'use strict';
module.exports = (sequelize, DataTypes) => {
  const Contains = sequelize.define('Contains', {
    Id_order: DataTypes.INTEGER,
    Id_product: DataTypes.INTEGER
  }, {});
  Contains.associate = function(models) {
    // associations can be defined here
  };
  return Contains;
};