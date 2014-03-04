var app = angular.module('APP', []);

app.controller('loginController', function($scope,$http){
    $scope.url = 'loginAjax.php';

    $scope.login = function(){
        if($scope.login_Form.$valid){
            
        }
    }
    
})

