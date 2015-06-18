/**
 * Created by nickf on 18/06/15.
 */
var app = angular.module('myApp', ['slick']);

app.controller('slick-example', function($scope, $http, sharedProperties) {
    $http.get("includes/projects.json")
        .success(function(response) {$scope.projects = response.projects;});
    $scope.test = function(project) {
        //console.log($scope.projects[2].title);
        //return angular.element($event.target);
        console.log(project);
        console.log(sharedProperties.getString);

    }
});