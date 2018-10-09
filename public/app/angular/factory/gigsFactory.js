/**
 * Created by MY PC on 10/4/2018.
 */
app.factory('gigsFactory',['$http', 'API_URL','Gig_plan', function($http, API_URL, Gig_plan) {

    var gig_plan = {};
    return {

        //GET Request Starts{...
        /**Retrieve a Single Gig**/
            fetchSingleGig: function (id) {
                var gig =$http.get('/Gig/' + id)
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(response){
                        console.log(response);
                    });
                return gig;
            },

        /**Retrieve All Gigs**/
            fetchAllGig: function () {
                var gigs =$http.get('/Gigs')
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(response){
                        console.log(response);
                    });
                return gigs;
            },

        /** Function to update_gig_plan**/
            update_gig_plan: function (id, gig){
                console.log(gig);
                switch (id)
                {
                    case Gig_plan.Premium:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.premium_price;
                        gig_plan.package_name = gig.premium_package_name;
                        gig_plan.package_description = gig.premium_package_description;
                        gig_plan.delivery_day = gig.premium_delivery_day;
                        break;

                    case Gig_plan.Standard:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.standard_price;
                        gig_plan.package_name = gig.standard_package_name;
                        gig_plan.package_description = gig.standard_package_description;
                        gig_plan.delivery_day = gig.standard_delivery_day;
                        break;

                    case Gig_plan.Basic:
                        gig_plan.id = id;
                        gig_plan.name = gig.gig_title;
                        gig_plan.price = gig.basic_price;
                        gig_plan.package_name = gig.basic_package_name;
                        gig_plan.package_description = gig.basic_package_description;
                        gig_plan.delivery_day = gig.basic_delivery_day;
                }

            },
        /** Function to get_gig_plan**/
            get_gig_plan : function (){
                    return gig_plan
                },
        //GET Request Ends...}

        //POST Request Starts{...
            add: function (gigsData) {
                var url = API_URL + 'update';
                var authGigs = $http({
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
                return authGigs;
            }
        //POST Request Ends...}

    };

}]);

