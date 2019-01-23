'use strict';
module.exports = (sequelize, DataTypes) => {
  const Comment = sequelize.define('Comment', {
    Id_user: DataTypes.INTEGER,
    Id_photo: DataTypes.INTEGER
  }, {});
  Comment.associate = function(models) {
    // associations can be defined here
  };
  return Comment;
};