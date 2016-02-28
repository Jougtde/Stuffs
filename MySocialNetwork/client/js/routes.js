angular.module('app')
    .config(['$routeProvider', '$locationProvider', function($routeProvider, $locationProvider) {

        $routeProvider
            .when('/user', {
                templateUrl: 'views/user.html',
                controller: 'UserController as usr'
            })
            .otherwise({
                templateUrl: 'views/home.html',
                controller: 'HomeController as home'
            });

        $locationProvider.html5Mode(true);

}]);