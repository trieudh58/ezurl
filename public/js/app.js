var ezurl = angular.module('ezurl', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

ezurl.constant('API', 'http://localhost:8000/link');

ezurl.controller('LinkController', function ($scope, $http, API) {
    $http.get(API).success(function (res) {
        $scope.links = res;
        console.log($scope.links);
        for (var i = 0; i < $scope.links.length; i++) {
            // Remove http:// from urls
            $scope.links[i].url_no_http = $scope.links[i].url;
            $scope.links[i].url_no_http = $scope.links[i].url_no_http.replace('http://', '');
            $scope.links[i].url_no_http = $scope.links[i].url_no_http.replace('https://', '');

            // Remove http:// from hashes
            $scope.links[i].hash_no_http = $scope.links[i].hash;
            $scope.links[i].hash_no_http = $scope.links[i].hash_no_http.replace('http://', '');
            $scope.links[i].hash_no_http = $scope.links[i].hash_no_http.replace('https://', '');
        }
    });

});