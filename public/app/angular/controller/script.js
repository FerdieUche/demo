///**
// * Created by MY PC on 8/8/2018.
// */
////<!--The controller for file upload-->
//app.controller('FileUploadController', ['$scope', '$http', 'API_URL', function ($scope, $http, API_URL) {
//    $scope.errors = [];
//
//    $scope.files = [];
//
//    //$scope.listFiles = function () {
//    //    var url = API_URL + '/file/list';
//    //    var request = {
//    //        method: 'GET',
//    //        url: url,
//    //        headers: {
//    //            'Content-Type': undefined
//    //        }
//    //    };
//    //
//    //    $http(request)
//    //        .then(function success(e) {
//    //
//    //            $scope.files = e.data.files;
//    //
//    //        }, function error(e) {
//    //
//    //        });
//    //};
//
//    //$scope.listFiles();
//
//    var formData = new FormData();
//
//    $scope.store = function () {
//        var url = API_URL + 'upload';
//        var request = {
//            method: 'POST',
//            url: url,
//            data: formData,
//            //headers: {
//            //    'Content-Type': 'application/x-www-form-urlencoded'
//            //}
//            headers: {
//                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//            }
//
//        };
//        $http(request)
//            .then(function success(e)
//            {
//                $scope.files = e.data.files;
//                $scope.errors = [];
//                console.log(e);
//                // clear uploaded file
//                var fileElement = angular.element('#image_file');
//                fileElement.value = '';
//                swal("Good job!", "File uploaded successfully!", "success");
//            },
//            function error(e)
//            {
//                $scope.errors = e.data.errors;
//                console.log(e);
//                swal("Error in Information!", "An error has occurred. Please check the file for upload!", "error");
//            }
//        );
//
//    };
//
//    $scope.setTheFiles = function ($files) {
//        angular.forEach($files, function (value, key) {
//            formData.append('image_file', value);
//        });
//    };
//
//    $scope.deleteFile = function (index) {
//        var conf = confirm("Do you really want to delete this file?");
//
//        if (conf == true) {
//            var url = API_URL + '/delete/file';
//            var request = {
//                method: 'POST',
//                url: url,
//                data: $scope.files[index]
//            };
//
//            $http(request)
//                .then(function success(e) {
//                    $scope.errors = [];
//                    console.log(e);
//
//                    $scope.files.splice(index, 1);
//
//                }, function error(e) {
//                    $scope.errors = e.data.errors;
//                    console.log(e);
//                });
//        }
//    };
//
//}]);
//
//app.directive('ngFiles', ['$parse', function ($parse) {
//
//    function file_links(scope, element, attrs) {
//        var onChange = $parse(attrs.ngFiles);
//        element.on('change', function (event) {
//            onChange(scope, {$files: event.target.files});
//        });
//    }
//
//    return {
//        link: file_links
//    }
//}]);




