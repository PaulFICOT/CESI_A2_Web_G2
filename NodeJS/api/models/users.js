'use strict';
module.exports = (sequelize, DataTypes) => {
  const Users = sequelize.define('Users', {
    Id_user: DataTypes.INTEGER,
    User_firstname: DataTypes.STRING,
    User_lastname: DataTypes.STRING,
    User_mail: DataTypes.STRING,
    User_password: DataTypes.STRING,
    User_status: DataTypes.STRING,
    User_isAdmin: DataTypes.BOOLEAN
  }, {});
  Users.associate = function(models) {
    // associations can be defined here
  };
  return Users;
};