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
        type: Sequelize.INTEGER
      },
      Product_name: {
        type: Sequelize.STRING
      },
      Product_price: {
        type: Sequelize.INTEGER
      },
      product_description: {
        type: Sequelize.STRING
      },
      Product_nbr_sold: {
        type: Sequelize.INTEGER
      },
      Product_stock: {
        type: Sequelize.INTEGER
      },
      Product_path_image: {
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