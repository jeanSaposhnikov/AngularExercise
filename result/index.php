<!doctype HTML>
<head>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
</head>
<html>
<body ng-app="app" ng-controller="controlleur">
    <p ng-model="ranking">Coolest Name : {{ranking[2]}}</p>
    <input type="text">
    <p>What is your name ? :</p>
    <input type="text" name="name" ng-model="name">
    <p ng-show="name">Nice to meet you {{name}} !</p>

    <p>How many items do you wish to buy ?</p>
    <input type="number" ng-model="quantity">
    <p ng-show="quantity">That would cost you {{quantity * 3.5}}</p>

    <p>Here is the list of clients :</p>
    <ul>
        <li ng-repeat="x in clients">{{x}}</li>
    </ul>

    <p>And here is a list of targets :</p>
    <ul>
        <li ng-repeat="x in targets">{{x.name + " from " + x.location}}</li>
    </ul>

    <p>Fill the fields below</p>
    <form>
        <label>Name<input type="text" name="name"></label>
        <label>Email<input type="text" name="email"></label><span ng-show="form.email.email.$invalid">The email is invalid</span>
        <label>Phone<input type="text" name="tel"></label>
        <label>Test Field :<input type="text" name="test"></label><span>The field has been touched !</span>
    </form>
</body>
</html>

<script src="js/app.js"></script>
<script src="js/controlleur.js"></script>