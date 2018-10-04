/**
 * Created by MY PC on 10/4/2018.
 */
app.factory('profileFactory',['$http', 'API_URL', function($http, API_URL) {

    return {

        //GET Request Starts{...

        //Retrieve a particular Person's Profile
        detail: function (id) {
            var person =$http.get('/person/' + id)
                .success(function(response){
                    console.log(response);
                })
                .error(function(data){
                    console.log(data);
                });
            return person;
        },

        //Retrieve a particular Profession Profile
        prof: function (id) {
            var profession =$http.get('/profession/' + id)
                .success(function(response){
                    console.log(response);
                })
                .error(function(data){
                    console.log(data);
                });
            return profession;
        },
        //...}GET Request Ends


        //POST Request Starts{...
        data: function (personData) {
            var url = API_URL + 'data';
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

        info: function (professionData) {
            var url = API_URL + 'info';
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
        //POST Request Ends{...
    }

}]);
