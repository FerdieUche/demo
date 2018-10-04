/**
 * Created by MY PC on 10/4/2018.
 */
app.controller('GigsController', function($state, $scope, $http, gigsFactory, $stateParams, $cookieStore) {

    //retrieve gigs listing from DB
    $http.get('/Gigs')
        .success(function(response) {
            $scope.gigs = response;
            console.log(response)
        });

    $scope.get = function(){
        $http.get('/Gigs')
            .success(function(response) {
                $scope.gigs = response;
                console.log(response)
            });
    };

    //Retrieve a particular gig's profile from DB
    $scope.id = {};
    gigsFactory.list($stateParams.id)
        .success(function (response) {
            $scope.gigs = response;
            console.log(response);
        })
        .error(function (response) {
            console.log(response);
        });

    $scope.gig_plan_id = 1;
    $scope.customize = function(){
        console.log($scope.gig_plan_id)
    };

    $scope.gigsData = {};
    //save new record / update existing record for Gigs Prfile
    $scope.save = function () {
        var id = {
            id : Number($cookieStore.get("user_auth").id)};
        $scope.gigsData = Object.assign({},$scope.gigsData,id);
        console.log($scope.gigsData);
        var username = {
            username : Number($cookieStore.get("user_auth").username)};
        $scope.gigsData = Object.assign({},$scope.gigsData,username);
        console.log($scope.gigsData);
        gigsFactory.add($scope.gigsData)
            .success(function(response)
            {
                console.log(response);
                $cookieStore.put("gigsData", response);
                console.log("gigsData")
                var result = $cookieStore.get("gigsData");
                console.log(result);
                swal("Good job!", "Personal information successfully updated!", "success");
            }
        )
            .error(function(response)
            {
                console.log(response);
                swal("This is embarrassing!", "An error has occurred. Please check the log for details!", "error");
            }
        );
    };

});

