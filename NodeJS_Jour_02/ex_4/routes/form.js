var express = require('express');
var router = express.Router();
var fs = require("fs");

/* GET form page. */
router.get('/', function(req, res, next) {
  fs.readFile('public/form.html', function (err, data) {
    if (err)
    {
      return console.error(err);
    }
    res.set('Content-Type', 'text/html');
    res.send(data);
  });
});

module.exports = router;
