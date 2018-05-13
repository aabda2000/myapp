var postsModule=angular.module('postsModule',[]);
postsModule.controller('ListController', function($scope,$http){
  $http.get('php/list.php').then(function(response){
     alert('bonj');
     $scope.posts=response.data;

  });

});

postsModule.controller('AddController', function($scope,$http){



});
