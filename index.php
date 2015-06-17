<?php include 'includes/header.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12" ng-app="myApp" ng-controller="customersCtrl">
      <ul>
        <li ng-repeat="x in projects">
          {{ x.title + ', ' + x.location }}
        </li>
      </ul>
    </div>
  </div>
</div>

<script>
  var app = angular.module('myApp', []);
  app.controller('customersCtrl', function($scope, $http) {
    $http.get("includes/projects.json")
      .success(function(response) {$scope.projects = response.projects;});
  });
</script>


<?php include 'includes/footer.php'; ?>



