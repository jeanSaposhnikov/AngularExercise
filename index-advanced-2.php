<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="app" ng-controller="controller" ng-init="quantity=0; price=0">
    <p>Coolest Name : {{clients[2]}}</p>
    <input type="text" ng-model="color" backgroundColor>

    <p>What is your name ? :</p> <input type="text" ng-model="name">
    <p ng-show="name">Nice to meet you {{name}} ! </p>

    <p>How many items you wish to buy ?</p>
    <input type="number" ng-model="quantity">
    <p ng-show="quantity">That would cost you price $ !</p>

    <p>Here is the list of targets :</p>
    <ul>
    <li ng-repeat="x in clients">
      {{ x }}
    </li>
    </ul>


    <form name="form">
        <label>Name:
            <input type="text" name="name">
        </label>
        <label>Email:
            <input type="email" name="email" ng-model="text">
            <span ng-show="form.email.$error.email">{{errorMail}}</span>
        </label>
        <label>Phone
            <input type="tel" name="phone" ng-model="tet">
            <span ng-show="form.phone.$error.phone">{{errorPhone}}</span>
        </label>
    </form>


    <script src="js/app.js"></script>
    <script src="js/controller.js"></script>

</body>
</html>