(function(){
    'use strict';
    angular.module('Comunicapp', [])
    .config(function($interpolateProvider) {
        $interpolateProvider.startSymbol('#{');
        $interpolateProvider.endSymbol('}');
    });
})();
