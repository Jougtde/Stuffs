
var path = require('path');
var User = require('./user.model');

module.exports = function(app) {

    app.get('/api/user', function(req, res) {
        User.find(function(err, user) {
            (err ? res.send(err) : res.json(user));
        });
    });

    app.post('/api/user', function(req, res) {
        User.create(req.body, function(err) {
            (err ? res.send(err) : res.status(200).send());
        });
    });
    
    app.delete('/api/user/:id', function(req, res) {
        User.remove({_id: req.params.id}, function(err) {
            (err ? res.send(err) : res.status(200).send());
        });
    });

    app.get('*', function(req, res) {
        res.sendfile(path.resolve('../client/index.html'));
    });

};