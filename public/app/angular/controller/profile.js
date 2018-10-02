/**
 * Created by MY PC on 8/7/2018.
 */


app.controller('PeopleController', function($state, $scope, $http, API_URL, $cookieStore){

    $scope.personData = {};

    //getting the id of the user to person's id as a foreign key in d DB
    $scope.personData.id = $cookieStore.get("user_auth").id;
    console.log($scope.personData);

    //retrieving the object "personData" from the DB
    $scope.firstname = $cookieStore.get("personData").firstname;
    console.log($scope.firstname);
    $scope.surname = $cookieStore.get("personData").surname;
    console.log($scope.surname);
    $scope.language = $cookieStore.get("personData").lang;
    console.log($scope.language);
    $scope.description = $cookieStore.get("personData").description;
    console.log($scope.description);
    $scope.proficiency = $cookieStore.get("personData").proficiency;
    console.log($scope.proficiency);
    $scope.phone = $cookieStore.get("personData").phone;
    console.log($scope.phone);

    //save new record / update existing record
    $scope.save = function() {
        $http({
            method: 'POST',
            url:  API_URL + 'data',
            data: $.param($scope.personData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
            .success(function(response)
            {
                console.log(response);
                $cookieStore.put("personData", response);
                console.log("personData")
                var result = $cookieStore.get("personData");
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

    $scope.isAuth = function() {
        if ($cookieStore.get("personData")){
            //
            return true;
        }
        else {
            return false;
        }
    };

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

    //retrieving the object "professionData" from the DB
    $scope.occupation = $cookieStore.get("professionData").occupation;
    console.log($scope.occupation);
    $scope.employment = $cookieStore.get("professionData").employment;
    console.log($scope.employment);
    $scope.income = $cookieStore.get("professionData").income;
    console.log($scope.income);
    $scope.skill = $cookieStore.get("professionData").skill;
    console.log($scope.skill);
    $scope.skill_level = $cookieStore.get("professionData").skill_level;
    console.log($scope.skill_level);
    $scope.sch_location = $cookieStore.get("professionData").sch_location;
    console.log($scope.sch_location);
    $scope.sch_name = $cookieStore.get("professionData").sch_name;
    console.log($scope.sch_name);
    $scope.title = $cookieStore.get("professionData").title;
    console.log($scope.title);
    $scope.course_major = $cookieStore.get("professionData").course_major;
    console.log($scope.course_major);
    $scope.sch_year = $cookieStore.get("professionData").sch_year;
    console.log($scope.sch_year);
    $scope.cert = $cookieStore.get("professionData").cert;
    console.log($scope.cert);
    $scope.cert_year = $cookieStore.get("professionData").cert_year;
    console.log($scope.cert_year);
    $scope.web = $cookieStore.get("professionData").web;
    console.log($scope.web);

    //save new record / update existing record
    $scope.save = function(){
        console.log($cookieStore.get("user_auth"))
        var id = {
            id : Number($cookieStore.get("user_auth").id)};
        $scope.professionData = Object.assign({},$scope.professionData,id);
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

    $scope.isAuth = function() {
        if ($cookieStore.get("professionData")){
            //
            return true;
        }
        else {
            return false;
        }
    };


});

app.controller('GigsController', function($state, $scope, $http, API_URL, $cookieStore){

    //retrieve gigs listing from API
    $http.get('/Gigs')
        .success(function(response) {
            $scope.gigs = response;
            console.log(response)
        });

    $scope.get = function(){
        $http.get('/Gigs')
            .success(function(response) {
                $scope.gigs = response;
                console.log(response)
            });
    };

    $scope.gigsData = {};

    //save new record / update existing record
    $scope.save = function() {
        var id = {
            id : Number($cookieStore.get("user_auth").id)};
        $scope.gigsData = Object.assign({},$scope.gigsData,id);
        console.log($scope.gigsData);
        var username = {
            username : Number($cookieStore.get("user_auth").username)};
        $scope.gigsData = Object.assign({},$scope.gigsData,username);
        console.log($scope.gigsData);
        $http({
            method: 'POST',
            url:  API_URL + 'update',
            data: $.param($scope.gigsData),
            headers: {'Content-Type': 'application/x-www-form-urlencoded'}
        })
            .success(function(response)
            {
                console.log(response);
                $cookieStore.put("gigsData", response);
                console.log("gigsData")
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

app.controller('GigController', function($scope, $http, gigFactory, $stateParams) {

    $scope.id = {};
        gigFactory.list($stateParams.id)
            .success(function (response) {
                $scope.gigs = response;
                console.log(response);
            })
            .error(function (response) {
                console.log(response);
            });

    $scope.gig_plan_id = 1;
    $scope.customize = function(){
        console.log($scope.gig_plan_id)
    }
});

app.controller('PersonController', function($scope, $http, personFactory, $stateParams) {

    //retrieve a particular person from DB
    $scope.id = {};
    personFactory.info($stateParams.id)
        .success(function (response) {
            $scope.person = response;
            console.log(response);
        })
        .error(function (response) {
            console.log(response);
        });
});

