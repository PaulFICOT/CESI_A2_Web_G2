/* jshint indent: 1 */

module.exports = function(sequelize, DataTypes) {
	return sequelize.define('messages', {
		id_messages: {
			type: DataTypes.INTEGER(11),
			allowNull: false,
			primaryKey: true,
			autoIncrement: true
		},
		Content_messages: {
			type: DataTypes.STRING(255),
			allowNull: false
		},
		Attachment_messages: {
			type: DataTypes.STRING(120),
			allowNull: true
		},
		Likes_messages: {
			type: DataTypes.INTEGER(11),
			allowNull: false
		}
	}, {
		tableName: 'messages'
	});
};
