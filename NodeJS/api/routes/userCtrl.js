//IMPORTS
var bcrypt = require('bcryptjs');
var jwt = require('jsonwebtoken');
var models = require('../models');

//ROUTES
module.exports = {
    register: function(req, res) {
        //PARAMS
        var user_mail = req.body.user_mail;
        var user_firstname = req.body.user_firstname;
        var user_lastname = req.body.user_lastname;
        var user_password = req.body.user_password;
        var center_name = req.body.center_name

        if (user_firstname == null || user_lastname == null || user_mail == null || user_password == null || center_name == null) {
            return res.status(400).json({'error': 'missing parameter'});
        }

        //TODO CHECK 

        models.users.findOne({
            attributes: ['user_mail'],
            where: { user_mail: user_mail}
        })
        .then(function(userFound) { 
            if (!userFound) {

                bcrypt.hash(user_password, 5, function( err, bcrytedPassword ) {
                    var newUser = models.users.create({
                        user_mail: user_mail,
                        user_firstname: user_firstname,
                        user_lastname: user_lastname,
                        user_password: bcrytedPassword,
                        center_name: center_name,
                        user_bio: user_bio,
                        isAdmin: 0
                    })
                    .then(function(newUsers) {
                        return res.status(201).json({
                            'Id_user': newUsers.Id_user
                        })
                    })

                    .catch(function(err) {
                        return res.status(500).json({'error': 'cannot add user'});
                    });
                });

            } else {
                return res.status(409).json({ 'error': 'user already exist' });
            }
        })

        .catch(function(err) {
            return res.status(500).json({'error': 'unable to verify user' });
        })
    },

    login:function(req, res) {  
        //TODO
    }
}