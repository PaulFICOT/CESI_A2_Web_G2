var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');
var bodyParser = require('body-parser');
var cors = require('cors');

//Routes config
var Index = require('./routes/index');
var Api = require('./routes/api')

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

var Logins = require('./routes/Login');
var Registers = require('./routes/Register');

var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');
// uncomment after placing your favicon in /public
app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(cors());
app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

12//Adding routes
app.use('http://localhost:3000/', Index);
app.use('/api', Api)

app.use('/api/category', Categories);
app.use('/api/center', Centers);
app.use('/api/contain', Contains);
app.use('/api/event', Events);
app.use('/api/like', Likes);
app.use('/api/order', Orders);
app.use('/api/product', Products);
app.use('/api/signin', Signs_in);
app.use('/api/user', Users);
app.use('/api/vote', Votes);

app.use('/login', Logins);
app.use('/register', Registers);


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