var express = require('express');
var router = express.Router();

/* GET student page. */
router.get('/student/:id', function(req, res, next) {

  res.cookie('name', 'O', {expire : new Date() + 9999});
  res.cookie('number', '0', {expire : new Date() + 9999});

  if (/^(\d+)$/.test(req.params.id))
  {
    if (req.query.name)
    {
      res.cookie('name', req.query.name, {expire : new Date() + 9999});
      res.cookie('number', req.params.id, {expire : new Date() + 9999});
      res.render('student', {id: req.params.id, name: req.query.name});
    }
    else
    {
      res.cookie('number', req.params.id, {expire : new Date() + 9999});
      res.render('student', {id: req.params.id, name: req.query.name});
    }
  }
  else
  {
    var error = new Error('Not found');
    error.status = 404;
    next(error);
  }
});

module.exports = router;
