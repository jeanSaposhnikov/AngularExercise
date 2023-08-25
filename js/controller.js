app.controller("controller", function($scope){
    $scope.clients = ['Robert','Celine','Azazel','Mick','Nicole, Ken'];
    //$scope.price=quantity * 3;
});

app.directive("backgroundColor", function(){
    return{
        template : style="background-color:{{color}}"
    }
});