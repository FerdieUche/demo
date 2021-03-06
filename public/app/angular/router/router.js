/**
 * Created by MY PC on 6/19/2018.
 */

app.config(['$stateProvider', '$urlRouterProvider' ,function($stateProvider, $urlRouterProvider) {
    $stateProvider
        .state('home',
        {
            abstract: true,
            url: '',
            views: {
                '': {
                    templateUrl: 'partials/home.html'
                },
                'header@home': {
                    templateUrl: 'partials/includes/header.html'
                },
                'footer@home': {
                    templateUrl: 'partials/includes/footer.html'
                }
            }
        })

        .state('index',
        {
            parent:'home',
            url: '/index',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/index.html'
                }
            },
            authenticate: false
        })

        .state('start_selling',
        {
            parent:'home',
            url: '/start_selling',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/start_selling.html'
                }
            },
            authenticate: false
        })

        .state('error',
        {
            parent:'home',
            url: '/error',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/error.html'
                }
            },
            authenticate: false
        })

        .state('seller_onboarding',
        {
            parent:'home',
            url: '/seller_onboarding',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/seller_onboarding.html'
                }
            },
            authenticate: true
        })

        .state('manage_gig',
        {
            parent:'home',
            url: '/manage_gig',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/manage_gig.html'
                }
            },
            authenticate: true
        })

        .state('gig',
        {
            parent:'home',
            url: '/gig/:id',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/gig-details.html'
                }
            },
            authenticate: false
        })

        .state('customize',
        {
            parent:'home',
            url: '/customize',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/customize.html'
                }
            },
            authenticate: false
        })

        .state('payment',
        {
            parent:'home',
            url: '/payment',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/payment.html'
                }
            },
            authenticate: true
        })

        .state('pro_home',
        {
            parent:'home',
            url: '/pro_home',
            views: {
                'home_content@home': {
                    templateUrl: 'partials/pages/pro_home.html'
                }
            },
            authenticate: false
        });

    $urlRouterProvider.otherwise('/index');

}]);
