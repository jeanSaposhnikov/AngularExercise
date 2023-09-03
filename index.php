<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
</head>

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="app" ng-controller="controller" ng-init="quantity=0; price=0">
    <p>Coolest Name : {{clients[2]}}</p>
    <input type="text" ng-model="color" backgroundColor>

    <p>What is your name ? :</p> <input type="text" ng-model="name">
    <p ng-show="name">Nice to meet you {{name}} ! </p>

    <p>How many items you wish to buy ?</p>
    <input type="number" ng-model="quantity">
    <p ng-show="quantity">That would cost you {{3.5 * quantity}}  $ !</p>

    <p>Here is the list of clients :</p>
    <ul>
        <li ng-repeat="x in clients">
        {{ x }}
        </li>
    </ul>

    <p>And here is a list of targets :</p>

    <ul>
        <li ng-repeat="x in targets">
            {{ x.name + " from " + x.location }}
        </li>
    </ul>


    <form class="flex-column" name="form">
        <p ng-hide="test">Fill the fields below </p>
        <label>Name:
            <input type="text" name="name">
        </label>
        <label>Email:
            <input type="email" name="email" ng-model="text">
            <span ng-show="form.email.$error.email">{{errorMail}}</span>
        </label>
        <label>Phone
            <input type="tel" name="tel" ng-model="tel">
            <span ng-show="form.tel.$error.tel">{{errorPhone}}</span>
        </label>
        <label for="test">Test Field :
            <input type="text" id="test" name="test" ng-model="test"><span ng-show="form.test.$touched">The field has been touched !</span>
        </label>
    </form>

    <script src="js/app.js"></script>
    <script src="js/controller.js"></script>

</body>
</html>