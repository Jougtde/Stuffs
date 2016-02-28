var mongoose = require('mongoose');
var bodyParser = require('body-parser');
var express = require('express');
var app = express();

app.use(bodyParser.json()); 
app.use(bodyParser.urlencoded({ extended: true }));

var db = require('./config/db');


app.use(express.static(__dirname + '/../client'));
require('./routes')(app);

app.listen(process.env.PORT || 3000);

console.log("Server listening on port ", process.env.PORT || 3000);