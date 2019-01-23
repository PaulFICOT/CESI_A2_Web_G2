'use strict';
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable('Photos', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      Id_photo: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Photo_name: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Photo_is_public: {
        allowNull:  false,
        type: Sequelize.BOOLEAN
      },
      Photo_like: {
        allowNull: false, 
        type: Sequelize.INTEGER
      },
      createdAt: {
        allowNull: false,
        type: Sequelize.DATE
      },
      updatedAt: {
        allowNull: false,
        type: Sequelize.DATE
      }
    });
  },
  down: (queryInterface, Sequelize) => {
    return queryInterface.dropTable('Photos');
  }
};