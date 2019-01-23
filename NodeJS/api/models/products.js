'use strict';
module.exports = (sequelize, DataTypes) => {
  const Products = sequelize.define('Products', {
    Id_products: DataTypes.INTEGER,
    Product_name: DataTypes.STRING,
    Product_price: DataTypes.INTEGER,
    product_description: DataTypes.STRING,
    Product_nbr_sold: DataTypes.INTEGER,
    Product_stock: DataTypes.INTEGER,
    Product_path_image: DataTypes.STRING
  }, {});
  Products.associate = function(models) {
    // associations can be defined here
  };
  return Products;
};