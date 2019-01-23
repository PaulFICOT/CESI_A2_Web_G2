/* jshint indent: 1 */

module.exports = function(sequelize, DataTypes) {
	return sequelize.define('users', {
		id_users: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			autoIncrement: true
		},
		user_firstname: {
			type: DataTypes.STRING(45),
			allowNull: false
		},
		user_lastname: {
			type: DataTypes.STRING(45),
			allowNull: false
		},
		user_mail: {
			type: DataTypes.STRING(50),
			allowNull: false
		},
		user_isAdmin: {
			type: DataTypes.INTEGER(10),
			allowNull: true
		},	
		user_bio: {
			type: DataTypes.TEXT,
			allowNull: true
		}
	}, {
		tableName: 'users'
	});
};
