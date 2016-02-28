var express = require('express');
var router = express.Router();

/* GET show page. */
router.post('/shows', function(req, res, next) {
  if (1 < 2)
  {
    res.render('shows', {name: req.body.name, gender: req.body.gender});
  }
  else
  {
    var error = new Error('Not found');
    error.status = 404;
    next(error);
  }
});

router.get('/shows', function(req, res, next) {
  res.status = 302;
  res.redirect('/');
});

module.exports = router;
