'use strict';
module.exports = (sequelize, DataTypes) => {
  const Sign_in = sequelize.define('Sign_in', {
    Id_event: DataTypes.INTEGER,
    Id_user: DataTypes.INTEGER
  }, {});
  Sign_in.associate = function(models) {
    // associations can be defined here
  };
  return Sign_in;
};