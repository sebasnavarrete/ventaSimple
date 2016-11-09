(function(){
    angular.module('Comunicapp')
        .factory('DatabaseStorageService', function($http,$q){
            var getFunction = function (resource){
                var deferred = $q.defer();
                $http.get(BASE_URL + resource)
                    .then(function successCallback(response) {
                        deferred.resolve(response);
                    }, function errorCallback(response) {
                        deferred.reject(response);
                    });
                return deferred.promise;
            };

            var showFunction = function (resource, id){
                var deferred = $q.defer();
                $http.get(BASE_URL + resource +'/' + id)
                    .then(function successCallback(response) {
                        deferred.resolve(response);
                    }, function errorCallback(response) {
                        deferred.reject(response);
                    });
                return deferred.promise;
            };

            var createFunction = function(resource, data) {
                var deferred = $q.defer();
                $http.post(BASE_URL + resource, data)
                    .then(function successCallback(response) {
                        deferred.resolve(response);
                    }, function errorCallback(response) {
                        deferred.reject(response);
                    });
                return deferred.promise;
            };

            var updateFunction = function(resource, id, data) {
                var deferred = $q.defer();
                $http.put(BASE_URL + resource + '/' + id, data)
                    .then(function successCallback(response) {
                        deferred.resolve(response);
                    }, function errorCallback(response) {
                        deferred.reject(response);
                    });
                return deferred.promise;
            };

            var deleteFunction = function(resource, id) {
                var deferred = $q.defer();
                $http.delete(BASE_URL + resource + '/' + id)
                    .then(function successCallback(response) {
                        deferred.resolve(response);
                    }, function errorCallback(response) {
                        deferred.reject(response);
                    });
                return deferred.promise;
            };

            return{
                createFunction  : createFunction,
                updateFunction  : updateFunction,
                deleteFunction  : deleteFunction,
                getFunction     : getFunction,
                showFunction    : showFunction
            };
        });

})();