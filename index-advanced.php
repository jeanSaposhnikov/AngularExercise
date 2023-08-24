<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="app" ng-controller="controller">
   <p>Coolest Name : {{clients[2]}}</p>
    <input type="text" ng-model="color" backgroundColor>
<script> 
    var app = angular.module("app", []);

    app.controller("controller", function($scope){
        $scope.clients = ['Robert','Celine','Azazel','Mick','Nicole']
    });

    app.directive("backgroundColor", function(){
        return{
            template : style="background-color:{{color}}"
        }
    });


</script>

</body>
</html>