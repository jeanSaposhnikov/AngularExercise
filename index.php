<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <head>
    </head>
    <body>
        <div ng-app="">
            <h1>app</h1>
            <p ng-model="model">Model</p>
            <p ng-bind="model"></p>
            <p>Expression outputted: {{expression}}</p>


            <p>Name: <input type="text" ng-model="name"></p>
            <p>{{name}}</p>

            <p>Last Name: <input type="text" ng-model="last"></p>
            <p ng-bind="last"></p>

            Color : <input ng-model="color"  type="text">
            <input type="text" style="background-color:{{color}}" readonly value={{color}}>
        </div>
    </body>
</html>