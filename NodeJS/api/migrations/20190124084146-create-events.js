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
        type: Sequelize.INTEGER
      },
      Event_title: {
        type: Sequelize.STRING
      },
      Event_description: {
        type: Sequelize.STRING
      },
      Event_comment: {
        type: Sequelize.STRING
      },
      Event_approval: {
        type: Sequelize.BOOLEAN
      },
      Event_date: {
        type: Sequelize.STRING
      },
      Event_reccurence: {
        type: Sequelize.BOOLEAN
      },
      Event_price: {
        type: Sequelize.INTEGER
      },
      Event_voted: {
        type: Sequelize.INTEGER
      },
      Event_period: {
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