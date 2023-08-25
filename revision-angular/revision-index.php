<!DOCTYPE HTML>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    </head>
    <body ng-app="app" ng-controller="controlleur">
        <input type="text" ng-model="nom">
        <p style="color:{{color}}">{{nom}}</p>
        <p>{{clients}}</p>
        <input type="text" ng-model="color">
    </body>

    <script src="app.js"></script>
    <script src="controlleur.js"></script>
</html>
