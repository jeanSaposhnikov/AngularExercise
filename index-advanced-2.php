<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="app" ng-controller="controller" ng-init="price=0;quantity=0">
    <p>Coolest Name : {{clients[2]}}</p>
    <input type="text" ng-model="color" backgroundColor>

    <p>What is your name ? :</p> <input type="text" ng-model="name">
    <p>Nice to meet you {{name}} ! </p>

    <p>How many items you wish to buy ?</p>
    <input type="number" ng-model="quantity">
    <p>That would cost you {{price}} $ !</p>

    <p>Here is the list of targets :</p>
    <ul>
    <li ng-repeat="x in clients">
      {{ x }}
    </li>
    </ul>


    <script src="js/app.js"></script>
    <script src="js/controller.js"></script>

</body>
</html>