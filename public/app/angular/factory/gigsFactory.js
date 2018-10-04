/**
 * Created by MY PC on 10/4/2018.
 */
app.factory('gigsFactory',['$http', 'API_URL', function($http, API_URL) {

    return {
        //Retrieve a particular Gig
        list: function (id) {
            var gigs =$http.get('/Gig/' + id)
                .success(function(response){
                    console.log(response);
                })
                .error(function(data){
                    console.log(data);
                });
            return gigs;
        },

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

    };

}]);
