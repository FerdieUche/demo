/**
 * Created by Ferdie on 10/4/2018.
 */
app.factory('gigsFactory',['$http', 'API_URL','Gig_plan', function($http, API_URL, Gig_plan) {

    var gig_plan = {};
    var PercentageCharges = {};
    return {

        //GET Request Starts{...
        /**Function to Retrieve a Single Gig**/
            fetchSingleGig: function (id) {
            return $http.get('/FetchSingleGig/' + id)
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(response){
                        console.log(response);
                    });
            },

        /**Function to Retrieve All Gigs**/
            fetchAllGig: function () {
            return $http.get('/FetchAllGigs')
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(response){
                        console.log(response);
                    });
            },

        /**Function to Retrieve All Charges**/
            fetchAllCharges: function () {
               return $http.get('/FetchTransactionCharges')
                    .success(function(response){
                       PercentageCharges = response;
                       console.log(PercentageCharges);
                   })
                    .error(function(response){
                        console.log(response);
                    });

            },

        /** Function to update_gig_plan with switch statement**/
            update_gig_plan: function (id, gig){
                console.log(gig);
                console.log(PercentageCharges);
                switch (id)
                {
                    case Gig_plan.Premium:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.premium_price;
                        gig_plan.charge = PercentageCharges.BasicPlanTransactionCharge;
                        gig_plan.package_name = gig.premium_package_name;
                        gig_plan.package_description = gig.premium_package_description;
                        gig_plan.delivery_day = gig.premium_delivery_day;
                        break;

                    case Gig_plan.Standard:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.standard_price;
                        gig_plan.charge = PercentageCharges.StandardPlanTransactionCharge;
                        gig_plan.package_name = gig.standard_package_name;
                        gig_plan.package_description = gig.standard_package_description;
                        gig_plan.delivery_day = gig.standard_delivery_day;
                        break;

                    case Gig_plan.Basic:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.basic_price;
                        gig_plan.charge = PercentageCharges.PremiumPlanTransactionCharge;
                        gig_plan.package_name = gig.basic_package_name;
                        gig_plan.package_description = gig.basic_package_description;
                        gig_plan.delivery_day = gig.basic_delivery_day;
                }

            },
        /** Function to get_gig_plan**/
            get_gig_plan : function (){
                    return gig_plan;
                },

        /**Function to Calculate the percentage charge**/
        CalculatePercentageCharge: function(){
            return ((gig_plan.charge / 100)* gig_plan.price);
        },
        //...}GET Request Ends

        //POST Request Starts{...
            add: function (gigsData) {
                var url = API_URL + 'UpdateSingleGig';
                return $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(gigsData)
                })
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(data, status, header){
                        console.log(data);
                    });
            }
        //...}POST Request Ends
    };
}]);