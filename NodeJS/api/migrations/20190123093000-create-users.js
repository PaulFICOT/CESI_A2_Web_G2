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
        allowNull: false,
        type: Sequelize.INTEGER
      },
      User_firstname: {
        allowNull: false,
        type: Sequelize.STRING
      },
      User_lastname: {
        allowNull: false,
        type: Sequelize.STRING
      },
      User_mail: {
        allowNull: false,
        type: Sequelize.STRING
      },
      User_password: {
        allowNull: false,
        type: Sequelize.STRING
      },
      User_status: {
        allowNull: false,
        type: Sequelize.STRING
      },
      User_isAdmin: {
        allowNull: false,
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