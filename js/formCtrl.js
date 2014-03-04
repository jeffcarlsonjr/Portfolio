var app = angular.module('APP', []);
app.controller('signupController', function($scope, $http){
    $scope.submitted = false;
    $scope.signupForm = function(){
        if($scope.signup_form.$valid){
            
        }
        else
        {
            $scope.signup_form.submitted = true;
        }
    };
    $scope.url = 'uploadForm.php';
    $scope.signupForm = function(){
        $http.post($scope.url,{ "name" : $scope.signup.name, "email" : $scope.signup.email}).
                success(function(data, status) {
                $scope.status = status;
                $scope.data = data;
                $scope.result = data; 
            });
            console.log($scope.signup.name)
    }
    
    
});

// $scope.addComment = function(comment){
//        // Validate the comment is not an empty and undefined
//        if("undefined" != comment.msg){
//        // Angular AJAX call
//        $http({
//        method : "POST",
//        url : "index.php", 
//        data : "action=add&msg="+comment.msg
//        }).success(function(data){
//        // Add the data into DOM for future use
//        $scope.comments.unshift(data); 
//        });
//        $scope.comment = "";
//        }
//        }