<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="app" ng-controller="controller">
   <p>Coolest Name : {{clients[2]}}</p>

<script> 
    var app = angular.module("app", []);

    app.controller("controller", function($scope){
        $scope.clients = ['Robert','Celine','Azazel','Mick','Nicole']
    });
</script>

</body>
</html>