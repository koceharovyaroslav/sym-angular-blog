(function(){
    'use strict';
    angular.module('blogApp', ['ngRoute'])
        .config(function($interpolateProvider){
            $interpolateProvider.startSymbol('{$').endSymbol('$}');
        });
})();