'use strict';
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable('Users', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      Id_user: {
        type: Sequelize.INTEGER
      },
      User_firstname: {
        type: Sequelize.STRING
      },
      User_lastname: {
        type: Sequelize.STRING
      },
      User_mail: {
        type: Sequelize.STRING
      },
      User_password: {
        type: Sequelize.STRING
      },
      User_status: {
        type: Sequelize.STRING
      },
      User_isAdmin: {
        type: Sequelize.BOOLEAN
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
    return queryInterface.dropTable('Users');
  }
};