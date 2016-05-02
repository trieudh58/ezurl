var ezurl = angular.module('ezurl', [], function ($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

ezurl.constant('API', 'http://localhost:8000/link');

ezurl.controller('LinkController', function ($scope, $http, API) {
    $http.get(API).success(function (res) {
        $scope.links = res;
        console.log(res);
    })
});