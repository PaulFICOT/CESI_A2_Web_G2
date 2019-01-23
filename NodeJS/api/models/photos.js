'use strict';
module.exports = (sequelize, DataTypes) => {
  const Photos = sequelize.define('Photos', {
    Id_photo: DataTypes.INTEGER,
    Photo_name: DataTypes.STRING,
    Photo_is_public: DataTypes.BOOLEAN,
    Photo_like: DataTypes.INTEGER
  }, {});
  Photos.associate = function(models) {
    // associations can be defined here
  };
  return Photos;
};