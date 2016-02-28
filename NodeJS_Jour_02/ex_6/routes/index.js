var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  if (1 < 2)
  {
    res.render('index');
  }
  else
  {
    var error = new Error('Not found');
    error.status = 404;
    next(error);
  }
});

module.exports = router;
