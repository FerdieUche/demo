/**
 * Created by MY PC on 10/4/2018.
 */
app.controller('GigsController',[ '$state','$scope','$http','gigsFactory','$stateParams','$cookieStore','Gig_plan', function($state, $scope, $http, gigsFactory, $stateParams, $cookieStore, Gig_plan) {

    $scope.gigsData = {};
    $scope.gig = {};
    $scope.gig_plan = gigsFactory.get_gig_plan();
    $scope.service_fee = 50;

    //GET Request Starts{...
        /**Retrieve all gig's profile from DB**/
            gigsFactory.fetchAllGig($stateParams.id)
                .success(function (response) {
                    $scope.gigs = response;
                    console.log(response);
                })
                .error(function (response) {
                    console.log(response);
                });

        /**Retrieve a particular gig's profile from DB**/
            gigsFactory.fetchSingleGig($stateParams.id)
                .success(function (response) {
                    $scope.gig = response;
                    console.log(response);

            /**Calling the "update_Gig_plan" function from gigsFactory**/
                    gigsFactory.update_gig_plan(Gig_plan.Basic, $scope.gig);
                    gigsFactory.get_gig_plan($scope.gig_plan);

                    console.log(Gig_plan.Basic);
                })
                .error(function (response) {
                    console.log(response);
                });

        /** Declare the function 'update_Gig_plan' **/
        $scope.update_gig_plan = function (id)
        {
            gigsFactory.update_gig_plan(id, $scope.gig);
        };
        /**Function to Calculate the gig_plan.price Begins**/
        $scope.calculate = function(a, b) {
            $scope.isLoading  = true;
            console.log(a + ' ' + b);
            var solution = parseInt(a) + parseInt(b);
            //$timeout(function(){$scope.isLoading = false},2000);
            return solution;

        };
    //GET Request Ends...}


    //POST Request Starts{...
        /**save new record / update existing record for The Gigs Profile**/
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
                        console.log("gigsData");
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
    //POST Request Ends...}


}]);

