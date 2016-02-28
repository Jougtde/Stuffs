var express = require('express');
var router = express.Router();
var fs = require("fs");

/* GET student page. */
router.get('/student/:id', function(req, res, next) {
  if (/^(\d+)$/.test(req.params.id))
  {
    res.render('student', {id: req.params.id, name: req.query.name});
  }
  else
  {
    var error = new Error('Not found');
    error.status = 404;
    next(error);
  }
});

module.exports = router;
