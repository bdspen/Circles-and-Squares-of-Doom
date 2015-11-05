var circlesSquares = angular.module('circlesSquares',['ui.router']);

circlesSquares.config(function($stateProvider, $urlRouterProvider){

  //welcome page route
  $stateProvider.state('welcome', {
    url:"",
    templateUrl: "partials/welcome.html",
    controller: "UserCtrl"
  });

  //route to game
  $stateProvider.state('game', {
    url:"/game",
    templateUrl: "partials/game.html",
    controller: "BoardCtrl"
  });
});
