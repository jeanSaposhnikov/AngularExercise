app.controller("controlleur", function($scope){
    $scope.ranking=["Abdul", "Cooler","Azazel"];
    $scope.clients= [
        "Robert",
        "Celine",
        "Azazel",
        "Mick",
        "Nicole",
        "Ken"
    ];

    $scope.targets= [
            {name:"Bowser", location: "Denmark"},
            {name:"Luigi", location: "Italy"},
            {name:"Yoshi", location: "Marshlands"},
            {name:"Lucio", location: "Amsterdam"}
    ]
});