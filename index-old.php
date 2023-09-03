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
            <div>
                <label>Quantity<input ng-model="amount" type="number" value="3"></label>
                <label>Price<input ng-model="price" type="text" value="0"></label>
                <p>Total : {{amount*price}}
            </div>

            <div ng-init="clients=['Robert','Celine','Azazel','Mick','Nicole']">
                <p>{{clients}}</p>
                <p>The person with the best name : {{clients[2]}}</p>
            </div>
        </div>
    </body>
</html>