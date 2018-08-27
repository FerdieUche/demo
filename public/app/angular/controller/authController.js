
'use strict';
app.controller('loginController', function($scope,$rootScope,$state, $http, loginFactory, $location, $cookieStore) {

    $scope.loginData = {};
    $scope.name = "User";

    console.log($cookieStore.get("user_auth"));


    $scope.signIn = function () {
        loginFactory.login($scope.loginData)
            .success(function (response) {
                console.log(response);
                $location.path('/');
                $scope.loading = false;
                $cookieStore.put("user_auth", response);
                var result = $cookieStore.get("user_auth");
                console.log(result);

                // Sets the new href (URL) for the current window.
                let url = $rootScope.redirectUrl;
                if (url) {
                    $rootScope.redirectUrl = "";
                    console.log(url)
                    window.location.href = "#/" + url;
                    //$state.go(url);
                } else {
                    //$state.go(url);
                    window.location.href = "/";
                }
            })
            .error(function (response) {
                console.log(response);
                $scope.loading = false;
                swal("Error in Information!", "An error has occurred. Please check the log for details!", "error");
            });
    };

    // function to evaluate if user is authenticated
    $scope.isAuth = function() {
        if ($cookieStore.get("user_auth")){
            //
            $scope.name = $cookieStore.get("user_auth").username;
            return true;
        }
        else {
            return false;
        }
    };

    $scope.logout = function ()

    {
        console.log("Called logout");
        $cookieStore.remove("user_auth");
        window.location.href = "/";
    };
});


app.controller('registerController', function($scope, $http, registerFactory, $location, $cookieStore) {

    $scope.registerData = {};

    $scope.register = function () {
        registerFactory.register($scope.registerData)
            .success(function (response) {
                console.log(response);
                $location.path('/');
                $scope.loading = false;
                $cookieStore.put("user_auth", response);
                var result = $cookieStore.get("user_auth");
                console.log(result);
                swal("Good job!", "Registration successful!", "success");
                // Sets the new href (URL) for the current window.
                //window.location.href = "/";
            })
            .error(function (response) {
                console.log(response);
                $scope.loading = false;
                swal("Error in Information!", "An error has occurred. Please check the log for details!", "error");

            });
    };

    // function to evaluate if user is authenticated
    $scope.isAuth = function() {
        if ($cookieStore.get("user_auth")){
            return true;
        }
        else {
            return false;
        }
    };

});


app.controller('MainCtrl', function ($scope) {
    $scope.showModal = false;
    $scope.toggleModal = function(){
        $scope.showModal = !$scope.showModal;
    };
});

app.directive('modal', function () {
    return {
        template: '<div class="modal fade">' +
        '<div class="modal-dialog">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
        '<h4 class="modal-title">{{ title }}</h4>' +
        '</div>' +
        '<div class="modal-body" ng-transclude></div>' +
        '</div>' +
        '</div>' +
        '</div>',
        restrict: 'E',
        transclude: true,
        replace:true,
        scope:true,
        link: function postLink(scope, element, attrs) {
            scope.title = attrs.title;

            scope.$watch(attrs.visible, function(value){
                if(value == true)
                    $(element).modal('show');
                else
                    $(element).modal('hide');
            });

            $(element).on('shown.bs.modal', function(){
                scope.$apply(function(){
                    scope.$parent[attrs.visible] = true;
                });
            });

            $(element).on('hidden.bs.modal', function(){
                scope.$apply(function(){
                    scope.$parent[attrs.visible] = false;
                });
            });
        }
    };
});

app.controller('CarouselDemoCtrl', function ($scope){
    $scope.myInterval = 3000;
    $scope.slides = [
        {
            src: 'asset/img/banner/pro-2.jpg'
        },
        {
            src: 'asset/img/banner/pro-1.jpg'
        },
        {
            src: 'asset/img/banner/pro-2.jpg'
        },
        {
            src: 'asset/img/banner/pro-1.jpg'
        }
    ];
});