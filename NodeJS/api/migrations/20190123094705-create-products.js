'use strict';
module.exports = {
  up: (queryInterface, Sequelize) => {
    return queryInterface.createTable('Products', {
      id: {
        allowNull: false,
        autoIncrement: true,
        primaryKey: true,
        type: Sequelize.INTEGER
      },
      Id_products: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Product_name: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Product_price: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      product_description: {
        allowNull: false,
        type: Sequelize.STRING
      },
      Product_nbr_sold: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Product_stock: {
        allowNull: false,
        type: Sequelize.INTEGER
      },
      Product_path_image: {
        allowNull: false,
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
    return queryInterface.dropTable('Products');
  }
};