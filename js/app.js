var app = angular.module("APP", ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
            when('/home', {
                templateUrl: 'template/home.html',
                
            }).
            when('/photos', {
                templateUrl: 'template/photos.html',
                controller: 'photoCtrl'
            }).
            when('/forms', {
                templateUrl: 'template/forms.html',
                controller: 'signupController'
            }).
            when('/login', {
                templateUrl: 'template/login.html',
                controller: 'loginController'
            }). 
            when('/application', {
                templateUrl: 'applications.php',
                controller: 'loginController'
            }).         
            otherwise({redirectTo: '/home'});
            
}]);

app.controller('photoCtrl', function($scope, $http){
    $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    $http.get("ajax/getPhotos.php").success(function(data)
        {
        $scope.photo = data;
        $scope.first = $scope.photo[0].path;
        
         });
        
        $scope.setImage = function(imageUrl){
            $scope.first = imageUrl;
        };
      
});

app.controller('signupController', function($scope, $http, $location){
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
                alert('Your password as been email to you. Please check your email now.');
                $location.path('/login');
            });
            console.log($scope.signup.name)
    }
});

app.controller('loginController', function($scope,$http,$location){
    $scope.url = 'ajax/loginAjax.php';
    $scope.loginForm = function(){
        if($scope.login_form.$valid){
            
        }
    }
    
    $scope.loginForm = function(){
    $http.post($scope.url,{'username' : $scope.login.username, 'password' : $scope.login.password}).
                  success(function(data,status){
                      $scope.status = status;
                      $scope.data = data;
                      $scope.result = data;
                      if($scope.result !== '')
                      {
                          $location.path('/application');
                      }
                      else
                      {
                          $location.path('/login');
                      }
                      //
                  });
                      
                  }
              });