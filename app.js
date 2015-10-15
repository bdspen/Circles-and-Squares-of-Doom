var circlesSquares = angular.module('circlesSquares',['ui.router']);

circlesSquares.config(function($stateProvider, $urlRouterProvider){

  //make welcome page route

  //route to game
  $stateProvider.state('game', {
    url:"",
    templateUrl: "partials/game.html",
    controller: "BoardCtrl"

  });
});
