'use strict';
module.exports = (sequelize, DataTypes) => {
  const Centers = sequelize.define('Centers', {
    Id_center: DataTypes.INTEGER,
    Center_name: DataTypes.STRING
  }, {});
  Centers.associate = function(models) {
    // associations can be defined here
  };
  return Centers;
};