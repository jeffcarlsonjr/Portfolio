var photoCtrl = angular.module('photoCtrl', []);

photoCtrl.controller('photoCtrl', function($scope, $http){
    $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
    $http({method: 'Get', url: 'ajax/getPhotos.php'}).success(function(data)
        {
        $scope.photo = data;
        $scope.first = '20140218_134121.jpg';
         });
        
        $scope.setImage = function(imageUrl){
            $scope.first = imageUrl;
        };
      
});

