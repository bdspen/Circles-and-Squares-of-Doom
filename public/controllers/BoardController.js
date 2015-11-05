circlesSquares.controller('BoardCtrl', function BoardCtrl($scope, TimerFactory) {
  $scope.TimerFactory = TimerFactory;
  $scope.board = TimerFactory.board;
  var boardMin = TimerFactory.boardMin;
  var boardMax = TimerFactory.boardMax;
  var dotMin = TimerFactory.dotMin;
  var dotMax = TimerFactory.dotMax;
  $scope.score = TimerFactory.score;
  $scope.timerValue = TimerFactory.timerValue;
  $scope.clicked = false;
  TimerFactory.createBoard();
  TimerFactory.placeInitialDots($scope.board);
  $scope.clickedColor = "";
  $scope.hoverXPos;
  $scope.hoverYPos;
  $scope.counter = 0;
});
