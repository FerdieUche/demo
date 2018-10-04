/**
 * Created by MY PC on 8/7/2018.
 */

app.controller('ProfileController', function($state, $scope, $http, API_URL, $cookieStore, profileFactory, $stateParams){

    //Person Profile Begins
    $scope.personData = {};

    //retrieve a particular person profile from DB
    $scope.id = {};
    profileFactory.detail($stateParams.id)
        .success(function (response) {
            $scope.person = response;
            console.log(response);
        })
        .error(function (response) {
            console.log(response);
        });


    //getting the id of the user to person's id as a foreign key in d DB
    $scope.personData.id = $cookieStore.get("user_auth").id;
    console.log($scope.personData);

    //save new record / update existing record for Person's Profile
    $scope.save = function () {
        profileFactory.data($scope.personData)
            .success(function (response) {
                console.log(response);
                $cookieStore.put("personData", response);
                console.log("personData")
                var result = $cookieStore.get("personData");
                console.log(result);
                swal("Good job!", "Personal information successfully updated!", "success");

            })

            .error(function(response)
            {
                console.log(response);
                swal("This is embarrassing!", "An error has occurred. Please check the log for details!", "error");
            })
    };


    $scope.isAuth = function() {
        if ($cookieStore.get("personData")){
            //
            return true;
        }
        else {
            return false;
        }
    };
    //Person Profile Ends...

    //Profession Profile Begins...
    $scope.professionData = {};

    //retrieve a particular Profession Profile from DB
    //$scope.id = {};
    //profileFactory.prof($stateParams.id)
    //    .success(function (response) {
    //        $scope.profession = response;
    //        console.log(response);
    //    })
    //    .error(function (response) {
    //        console.log(response);
    //    });


    //getting the id of the user to profession's id as a foreign key in d DB
    $scope.professionData.id = $cookieStore.get("user_auth").id;

    $scope.save = function () {
        console.log($cookieStore.get("user_auth"))
        var id = {
            id : Number($cookieStore.get("user_auth").id)};
        $scope.professionData = Object.assign({},$scope.professionData,id);
        console.log($scope.professionData);

        profileFactory.info($scope.professionData)
            .success(function(response) {
                console.log(response);
                $scope.get();
                $cookieStore.put("professionData", response);
                var result = $cookieStore.get("professionData");
                console.log(result);
                swal("Good job!", "Professional information successfully updated!", "success");
            })
            .error(function(response) {
                console.log(response);
                swal("This is embarrassing!", "An error has occurred. Please check the log for details!", "error");

            });
    };


    $scope.isAuth = function() {
        if ($cookieStore.get("professionData")){
            //
            return true;
        }
        else {
            return false;
        }
    };

    //Profession Profile Ends...

});


