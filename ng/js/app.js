var app = angular.module('myApp', ['ngRoute', 'postsModule']);
app.config(function($routeProvider) {
  $routeProvider.
  when('/', {
    templateUrl: 'views/list.html',
    controller: 'ListController'
  }).
  when('/add', {
    templateUrl: 'views/add.html',
    controller: 'AddController'
  }).
  otherwise({
    redirectTo: '/'
  });

});
