var app = angular.module('APP', []);

app.controller('formValidator', function($scope) {
    $scope.submitted = false;
    $scope.signupForm = function() {
        if($scope.form.$valid){
            
        }
        else {
            $scope.form.submitted = true;
        }
    }
})

