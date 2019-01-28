'use strict';
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable('Events', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      Id_event: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Event_title: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Event_description: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Event_comment: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Event_approval: {
        allowNull: false,
        type: Sequelize.BOOLEAN
      },
      Event_date: {
        allowNull: false,
        type: Sequelize.DATE
      },
      Event_reccurence: {
        allowNull: false,
        type: Sequelize.BOOLEAN
      },
      Event_price: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Event_voted: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Event_period: {
        allowNull: true,
        type: Sequelize.STRING
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
    return queryInterface.dropTable('Events');
  }
};