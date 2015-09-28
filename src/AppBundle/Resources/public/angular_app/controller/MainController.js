(function(){
    'use strict';
    angular.module('blogApp')
        .controller('indexController', indexController);

    indexController.$inject = ['$http'];

    function indexController($http){
        var self = this;

        $http.get('api/get-all-posts').success(function(response){
            self.response = response;
        });
    }
})();