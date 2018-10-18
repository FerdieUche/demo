/**
 * Created by Ferdie on 10/4/2018.
 */
app.controller('GigsController',[ '$state','$scope','$http','gigsFactory','$stateParams','$cookieStore','Gig_plan', function($state, $scope, $http, gigsFactory, $stateParams, $cookieStore, Gig_plan) {

    $scope.gigsData = {};
    $scope.gig = {};
    $scope.PercentageCharges = {};
    console.log($scope.PercentageCharges);
    $scope.gig_plan = gigsFactory.get_gig_plan();
    $scope.service_fee = gigsFactory.CalculatePercentageCharge();

    //GET Request Starts{...
        /**Function to Retrieve all gig's profile from DB**/
        function fetchAllGig(){
            gigsFactory.fetchAllGig($stateParams.id)
                .success(function (response) {
                    $scope.gigs = response;
                    console.log(response);
                })
                .error(function (response) {
                    console.log(response);
                });
        }

        /**Function to Retrieve a particular gig's profile from DB**/
        function fetchSingleGig (){
            gigsFactory.fetchSingleGig($stateParams.id)
                .success(function (response) {
                    $scope.gig = response;
                    console.log(response);

                    /**Calling the "update_Gig_plan" function from gigsFactory**/
                    gigsFactory.update_gig_plan(Gig_plan.Basic, $scope.gig);
                    gigsFactory.get_gig_plan($scope.gig_plan);

                    console.log(gigsFactory.get_gig_plan())
                })
                .error(function (response) {
                    console.log(response);
                });
        }

        /**Function to Retrieve all charges profile from DB**/
        function fetchAllCharges(){
            gigsFactory.fetchAllCharges()
                .success(function (response) {
                    $scope.PercentageCharges = response;
                    console.log(response);
                })
                .error(function (response) {
                    console.log(response);
                });
        }

    /** Declare the function 'update_Gig_plan' **/
        $scope.update_gig_plan = function (id)
        {
            gigsFactory.update_gig_plan(id, $scope.gig);
            $scope.service_fee = gigsFactory.CalculatePercentageCharge();
        };

    /**Function to Calculate the percentage charge Begins**/
    function CalculatePercentageCharge(){
            gigsFactory.CalculatePercentageCharge();
        }

    /**Function to Calculate the gig_plan.price Begins**/
        $scope.calculate = function(a, b) {
            console.log(a + ' ' + b);
            var solution = parseInt(a) + parseInt(b);
            return solution;
        };
    //...}GET Request Ends


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
    //...}POST Request Ends

    //Call All functions
    fetchAllCharges();
    fetchSingleGig();
    fetchAllGig();
    CalculatePercentageCharge();

}]);

