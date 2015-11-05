var circlesSquares = angular.module('circlesSquares',['ui.router']);

circlesSquares.config(function($stateProvider, $urlRouterProvider){

  //welcome page route
  $stateProvider.state('welcome', {
    url:"",
    templateUrl: "public/partials/welcome.html",
  });

  //route to game
  $stateProvider.state('game', {
    url:"/game",
    templateUrl: "public/partials/game.html",
    controller: "BoardCtrl"
  });
});
