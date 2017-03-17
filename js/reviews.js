var app = angular.module('reviews',['ngRoute']);

app.controller('ReviewController',['$scope','$location','$http',function($scope,$location,$http){
    var url=$location.absUrl();
    $scope.id=url.slice(url.indexOf('id')+3);
    $scope.name='';
    $scope.rating='';
    $scope.review='';
    
    $http.get('/hotelreviews.php?id='+$scope.id).then(function(res){
        $scope.reviews=res.data;
        
    });
    
    $scope.submitReview=function(form){
        if(form.$invalid){
            return;
        }else{
        
        $http({
          method  : 'POST',
          url     : '/hotelreviews.php',
          data    : 'id='+$scope.id+"&name="+$scope.name+"&rating="+$scope.rating+"&review="+$scope.review, 
          headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
         }).success(function(res){
             $scope.reviews=res;
             
             $scope.name='';
             $scope.rating='';
             $scope.review='';
             
         });
        }
    }
    
}]);