<?php include 'includes/header.php'; ?>
<script type="text/javascript" src="js/controllers/slickExample.js"></script>
<script type="text/javascript">
  app.service('sharedProperties', function() {
    var stringValue = 'test string value';
    var objectValue = {
      data: 'test object value'
    };

    return {
      getString: function() {
        return stringValue;
      },
      setString: function(value) {
        stringValue = value;
      },
      getObject: function() {
        return objectValue;
      }
    }
  });

  app.controller('myController1', function($scope, $timeout, sharedProperties) {
    $scope.stringValue = sharedProperties.getString();
    $scope.objectValue = sharedProperties.getObject().data;
  });

  app.controller('myController2', function($scope, sharedProperties) {
    $scope.stringValue = sharedProperties.getString;
    $scope.objectValue = sharedProperties.getObject();
    $scope.setString = function(newValue) {
      $scope.objectValue.data = newValue;
      sharedProperties.setString(newValue);
    };
  });

  app.controller('currentProject', function($scope, $timeout, sharedProperties){

  })

</script>

<div class="container" ng-app="myApp" ng-controller="slick-example">
  <div class="row">
    <div class="open-project">
      <p>Project Title: {{project}}</p>
      <p>Project Location:</p>
    </div>

    <div ng-show="selectedTest != null">
      <div class="well well-large">{{selectedTest.title}}</div>
      <div class="well well-large">{{selectedTest.location}}</div>
    </div>

    <div class="col-sm-12">
      <h2>Projects</h2>
      <slick dots=true infinite=false speed=300 slides-to-show=3 touch-move=false slides-to-scroll=1>
        <div class="slide slide--has-caption slick-slide" ng-repeat="project in projects">
            <img data-lazy="{{project.screenShot}}">
          <div class="slide__caption" ng-click='test(project)'>{{project.title}}</div>
        </div>
      </slick>
    </div>

    <div ng-controller="myController1">
      <ul>
        <li><b>myController1</b> (values won't change)</li>
        <li>{{stringValue}}</li>
        <li>{{objectValue}}</li>
      </ul>
    </div>
    <div ng-controller="myController2">
      <ul>
        <li><b>myController2</b> (values will change when Set Values is clicked or when 2-way binding textbox is modified)</li>
        <li>{{stringValue()}}</li>
        <li>{{objectValue.data}}</li>
      </ul>
      <input type="text" ng-model="newValue"></input>
      <button ng-click="setString(newValue)">Set Values</button><br/>
      <input type="text" ng-model="objectValue.data"></input>2-way binding to objectValue
    </div>

  </div>
</div>

<?php include 'includes/footer.php'; ?>



