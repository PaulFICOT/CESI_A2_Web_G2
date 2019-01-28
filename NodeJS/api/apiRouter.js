//IMPORTS
var express = require('express');
var userCtrl = require('./routes/userCtrl');

//ROUTER
exports.router = (function() {
    var apiRouter = express.Router();

    //USERS ROUTES
    apiRouter.route('/users/register/').post(userCtrl.register);
    apiRouter.route('user/login.').post(userCtrl.login);

    return apiRouter;
})();