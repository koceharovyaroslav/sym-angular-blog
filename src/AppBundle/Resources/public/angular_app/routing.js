(function(){
    angular.module('blogApp')
        .config(["$routeProvider", function($routeProvider){
            $routeProvider
                .when("/",
                {
                    templateUrl: 'views/index',
                    controller: 'indexController',
                    controllerAs: 'index'
                });
        }]);
})();