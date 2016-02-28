var server = require('server');
var client = require('client');

server.run(9999);
client.connect('localhost', 9999);
