/**
 * Created by MY PC on 8/7/2018.
 */
app.controller('PersonController', function($state, $scope, $http, API_URL, $cookieStore){

    //retrieve persons listing from API
    $http.get(API_URL + "Person/{id?}")
        .success(function(response) {
            $scope.person = response;
        });

    $scope.get = function(){
        $http.get(API_URL + "Person/{id?}")
            .success(function(response) {
                $scope.person = response;
            });
    };

    $scope.personData = {};

    //getting the id of the user to person's id as a foreign key in d DB
    $scope.personData.id = $cookieStore.get("user_auth").id;
    console.log($scope.personData);

    //save new record / update existing record
    $scope.save = function() {
        $http({
            method: 'POST',
            url:  API_URL + 'data',
            data: $.param($scope.personData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
            .success(function(response) {
            console.log(response);
            $scope.get();
                $cookieStore.put("personData", response);
                var result = $cookieStore.get("personData");
                console.log(result);
                swal("Good job!", "Personal information successfully updated!", "success");

            })
            .error(function(response) {
            console.log(response);
            swal("This is embarrassing!", "An error has occurred. Please check the log for details!", "error");
            });
    };

    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'Person/' + id
            }).
                success(function(data) {
                    console.log(data);
                    $scope.get();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
        } else {
            return false;
        }
    }

});


app.controller('ProfessionController', function($state, $scope, $http, API_URL, $cookieStore){

    //retrieve employees listing from API
    $http.get(API_URL + "Profession/{id?}")
        .success(function(response) {
            $scope.profession = response;
        });

    $scope.get = function(){
        $http.get(API_URL + "Profession/{id?}")
            .success(function(response) {
                $scope.profession = response;
            });
    };

    $scope.professionData = {};

    //getting the id of the user to profession's id as a foreign key in d DB
    $scope.professionData.id = $cookieStore.get("user_auth").id;

    //save new record / update existing record
    $scope.save = function(){
        console.log("Data from prof")
        console.log($cookieStore.get("user_auth"))
        var {cert_year,sch_year} = $scope.professionData;
        var new_year = {
        id : Number($cookieStore.get("user_auth").id)};
        $scope.professionData = Object.assign({},$scope.professionData,new_year);
        console.log($scope.professionData);
        $http({
            method: 'POST',
            url:  API_URL + 'info',
            data: $.param($scope.professionData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
            .success(function(response) {
            console.log(response);
            $scope.get();
            $cookieStore.put("professionData", response);
                var result = $cookieStore.get("professionData");
                console.log(result);
                swal("Good job!", "Professional information successfully updated!", "success");
        })
            .error(function(response) {
            console.log(response);
            swal("This is embarrassing!", "An error has occurred. Please check the log for details!", "error");

            });
    };

    $scope.firstname = $cookieStore.get("personData").firstname;

    $scope.professionData = {
        sch_year: ''//2013, 9, 22),
    };
    console.log($scope.professionData);
    $scope.professionData = {
        cert_year: ''//(2013, 9, 22)
    };
    console.log($scope.professionData);


    $scope.professionData.web = $cookieStore.get("professionData");
    console.log($scope.professionData);


    //delete record
    $scope.confirmDelete = function(id) {
        var isConfirmDelete = confirm('Are you sure you want this record?');
        if (isConfirmDelete) {
            $http({
                method: 'DELETE',
                url: API_URL + 'Profession/' + id
            }).
                success(function(data) {
                    console.log(data);
                    $scope.get();
                }).
                error(function(data) {
                    console.log(data);
                    alert('Unable to delete');
                });
        } else {
            return false;
        }
    }

});