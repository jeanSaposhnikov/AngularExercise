app.controller("controller", function($scope){
    $scope.clients = ['Robert','Celine','Azazel','Mick','Nicole']
});

app.directive("backgroundColor", function(){
    return{
        template : style="background-color:{{color}}"
    }
});