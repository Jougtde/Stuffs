angular.module('app')
    .controller('MainController', function($scope) {
        this.title = 'Default';
    })
    .controller('HomeController', function($scope) {
        $scope.main.title = 'Home';
    })
    .controller('UserController', function($scope, $http) {
        var _this = this;

        $scope.main.title = 'Users';

        this.getUsers = function() {
            $http.get('/api/user')
                .then(function(res) {
                    _this.users = res.data;
                });
        };
        
        this.getUsers();

        this.removeUser = function(id) {
            $http.delete('/api/user/' + id)
            .then(function() {
                _this.getUsers();
            });
        };

        this.sendUser = function() {
            if (!this.newusr || !this.newusr.name || !this.newusr.email)
                return ;
            $http.post('/api/user', this.newusr)
            .then(function() {
                _this.getUsers();
            });
            this.newusr = {};
        };

    });