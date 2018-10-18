/**
 * Created by Ferdie on 8/7/2018.
 */
app.controller('ProfileController', function($state, $scope, $http, API_URL, $cookieStore, profileFactory, $stateParams){

    $scope.personData = {};
    $scope.professionData = {};

    //GET Request Starts{...
    /**Retrieve a Single Person's Profile from DB**/
    function FetchSinglePerson(){
        profileFactory.FetchSinglePerson($stateParams.id)
            .success(function (response) {
                $scope.person = response;
                console.log(response);
            })
            .error(function (response) {
                console.log(response);
            });

    }
    /**Retrieve a Single Profession's Profile from DB**/
    function FetchSingleProfession(){
        profileFactory.FetchSingleProfession($stateParams.id)
            .success(function (response) {
                $scope.profession = response;
                //console.log(response);
            })
            .error(function (response) {
                //console.log(response);
            });
    }

    FetchSinglePerson();
    FetchSingleProfession();
    //...}GET Request Ends


    //POST Request Starts{...
    /**Getting the id of the user to person's id as a foreign key in d DB**/
        $scope.personData.id = $cookieStore.get("user_auth").id;
        console.log($scope.personData);

    /**save new record / update existing record for The Person's Profile**/
        $scope.save = function () {
            profileFactory.SavePerson($scope.personData)
                .success(function (response) {
                    console.log(response);
                    $cookieStore.put("personData", response);
                    console.log("personData");
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

    /**Function to Check for Authenticated Person**/
        $scope.isAuth = function() {
                if ($cookieStore.get("personData")){
                    //
                    return true;
                }
                else {
                    return false;
                }
            };

    /**Getting the id of the user to profession's id as a foreign key in d DB**/
        $scope.professionData.id = $cookieStore.get("user_auth").id;

    /**save new record / update existing record for The Profession's Profile**/
        $scope.save = function () {
            console.log($cookieStore.get("user_auth"));
            var id = {
                id : Number($cookieStore.get("user_auth").id)};
            $scope.professionData = Object.assign({},$scope.professionData,id);
            console.log($scope.professionData);

            profileFactory.SaveProfession($scope.professionData)
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

    /**Function to Check for Authenticated Profession**/
        $scope.isAuth = function() {
            if ($cookieStore.get("professionData")){
                //
                return true;
            }
            else {
                return false;
            }
        };
    //POST Request Ends...}
});


