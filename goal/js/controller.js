app.controller("controller", function($scope){
    $scope.clients = ['Robert','Celine','Azazel','Mick','Nicole', 'Ken'];
    $scope.targets = [
        {   name:'Bowser', location: 'Denmark'},
        {   name:'Luigi', location: 'Italy'},
        {   name:'Yoshi', location: 'Marshlands'},
        {   name:'Lucio', location: 'Amsterdam'},
    ];
    $scope.errorMail = 'the email is invalid';
    $scope.errorPhone = 'the number is invalid';
    //$scope.price=quantity * 3;
});

app.directive("backgroundColor", function(){
    return{
        template : style="background-color:{{color}}"
    };
});

app.directive("blue", function(){
    return{
        template : "<h3>blue</h3>"
    };
});