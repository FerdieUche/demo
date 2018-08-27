var app = angular.module('app', ['ui.router', 'ngCookies', 'ui.bootstrap'], function($interpolateProvider) {

    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});

app.constant('API_URL', 'http://demo.io/api/');


