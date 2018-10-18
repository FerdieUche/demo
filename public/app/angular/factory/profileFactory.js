/**
 * Created by MY PC on 10/4/2018.
 */
app.factory('profileFactory',['$http', 'API_URL', function($http, API_URL) {

    return {

        //GET Request Starts{...
        /**Retrieve a Single Person's Profile**/
            FetchSinglePerson: function (id) {
                var person =$http.get('/FetchSinglePerson/' + id)
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(data){
                        console.log(data);
                    });
                return person;
            },

        /**Retrieve a Single Profession's Profile**/
            FetchSingleProfession: function (id) {
                var profession =$http.get('/FetchSingleProfession/' + id)
                    .success(function(response){
                        //console.log(response);
                    })
                    .error(function(data){
                        //console.log(data);
                    });
                return profession;
            },
        //...}GET Request Ends


        //POST Request Starts{...
        /**Update Person's Profile**/
            SavePerson: function (personData) {
                var url = API_URL + 'UpdatePerson';
                var authPerson = $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(personData)
                })
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(data, status, header){
                        console.log(data);
                    });
                return authPerson;
            },

        /**Update Profession's Profile**/
            SaveProfession: function (professionData) {
                var url = API_URL + 'UpdateProfession';
                var authProfession = $http({
                    method: 'POST',
                    url: url,
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(professionData)
                })
                    .success(function(response){
                        console.log(response);
                    })
                    .error(function(data, status, header){
                        console.log(data);
                    });
                return authProfession;
            }
        //POST Request Ends...}
    }

}]);
