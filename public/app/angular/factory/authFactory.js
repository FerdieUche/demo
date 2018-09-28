/**
 * Created by MY PC on 8/2/2018.
 */
app.factory('loginFactory',['$http', 'API_URL', function($http, API_URL) {

    return {

        //log in a new User
        login: function (loginData) {
            var url = API_URL + 'signin';
            var authUser = $http({
                method: 'POST',
                url: url,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param(loginData)
            })
              .success(function(response){
                console.log(response);
                //swal("Good job!", "Logged in successful!", "success");
            })
              .error(function(data, status, header){
                console.log(data);
                //swal("Error in Information!", "An error has occurred. Please check the log for details!", "error");
            });
            return authUser;
        },

        //Get Authentication Status of a user

        //Delete a User
        destroy: function (id) {
            return $http.delete('/api/comments/' + id);
        }
    }

}]);

app.factory('registerFactory',['$http', 'API_URL', function($http, API_URL) {

    return {

        //register a new User
        register: function (registerData) {
            var url = API_URL + 'register';
            var newUser = $http({
                method: 'POST',
                url: url,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: $.param(registerData)
            })
              .success(function(response){
                console.log(response);
                swal("Good job!", "Registration successful!", "success");
            })
              .error(function(data, status, header){
                console.log(data);
                swal("Error in Information!", "An error has occurred. Please check the log for details!", "error");
            });
            return newUser;
        }
    }
}]);

app.factory('gigFactory',['$http', function($http) {

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
        }
    };

}]);

app.factory('personFactory',['$http', function($http) {

    return {
        //Retrieve a particular person
        info: function (id) {
            var person =$http.get('/person/' + id)
                .success(function(response){
                    console.log(response);
                })
                .error(function(data){
                    console.log(data);
                });
            return person;
        }
    };

}]);

app.run(function ($rootScope, $state, AuthService) {
    $rootScope.$on("$stateChangeStart", function(event, toState, toParams, fromState, fromParams){
        if (toState.authenticate && !AuthService.isAuth()){
            // User isn’t authenticated
            $rootScope.redirectUrl = toState.name;
            $('#myModalLogin').modal();
           ///$state.transitionTo("$('#myModalLogin').modal(options)");
            event.preventDefault();
        }
    });
});

app.factory('AuthService',['$cookieStore', function($cookieStore) {
    return {
        isAuth: function () {
            if ($cookieStore.get("user_auth")) {
                return true;
            }
            else {
                return false;
            }
        }
    }
}]);