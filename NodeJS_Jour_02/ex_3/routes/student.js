var express = require('express');
var router = express.Router();
var fs = require("fs");

/* GET student page. */
router.get('/student/:id', function(req, res, next) {
  fs.readFile('public/student.html', function (err, data) {
    if (err)
    {
      return console.error(err);
    }
    else if (/^(\d+)$/.test(req.params.id))
    {
      var str = String(data).replace("X", req.params.id);
      res.send(str);
    }
    else
    {
      var error = new Error('Page not found');
      error.status = 404;
      next(error);
    }
  });
});

module.exports = router;
