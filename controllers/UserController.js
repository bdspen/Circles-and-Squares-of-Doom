circlesSquares.controller('UserCtrl', function UserCtrl($scope, $http) {

    $scope.addNewUser = function(add){
      $http.post("../app/insert.php",{'username': $scope.user.userName, 'password': $scope.user.password})
            .success(function(data, status, headers, config){
                console.log("inserted Successfully");
            });
    };

});
