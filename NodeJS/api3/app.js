var express = require('express');
var path = require('path');
//var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var cors = require('cors');

//Routes config
var Routes = require('./routes/index');
var Categories = require('./routes/Categories');
var Centers = require('./routes/Centers');
var Contains = require('./routes/Contains');
var Events = require('./routes/Events')
var Likes = require('./routes/Likes');
var Orders = require('./routes/Orders');
var Products = require('./routes/Products');
var Signs_in = require('./routes/Signs_in');
var Users = require('./routes/Users');
var Votes = require('./routes/Votes');

//var Login = require('./routes/Login');
//var Register = require('./routes/Register');

var app = express();


// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');
// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(cors());
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

12//Adding routes
app.use('/', Routes);
app.use('/category', Categories);
app.use('/center', Centers);
app.use('/contain', Contains);
app.use('/event', Events);
app.use('/like', Likes);
app.use('/order', Orders);
app.use('/product', Products);
app.use('/signin', Signs_in);
app.use('/user', Users);
app.use('/vote', Votes);

//app.use('/login', Login);
//app.use('/register', Register);


// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error('Not Found');
  err.status = 404;
  next(err);
});
// error handlers
// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
  app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
      message: err.message,
      error: err
    });
  });
}
// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: {}
  });
});

module.exports = app;