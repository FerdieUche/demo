app.factory('authFactory',['$http', 'API_URL', function($http, API_URL) {

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
                })
                .error(function(data, status, header){
                    console.log(data);
                });
            return authUser;
        },

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
