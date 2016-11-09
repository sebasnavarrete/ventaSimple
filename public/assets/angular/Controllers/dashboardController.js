(function(){
    angular.module('Comunicapp')
        .controller('dashboardController',function(DatabaseStorageService,$scope) {
            //region Variables iniciales
            $scope.ventas = [];
            //endregion
            //region Funciones de carga
            $scope.obtenerVentas = function() {
                loadingStart();
                DatabaseStorageService.getFunction('dashboard')
                    .then(function (response) {
                        $scope.ventas = response.data;
                        loadingStop();
                        //console.log("ventas: ",$scope.ventas);
                    }, function errorCallback(response) {
                        console.log(response);
                        loadingStop();
                    });
            };
            $scope.borrar = function(id) {
                var msgConfirm = 'Desea eliminar el registro ?';
                if(confirm(msgConfirm)) {
                    loadingStart();
                    DatabaseStorageService.deleteFunction("dashboard" ,id)
                        .then(function (data) {
                            console.log(data);
                            $scope.obtenerVentas();
                        }, function errorCallback(error) {
                            console.log(error);
                            loadingStop();
                        });
                }
            };
            //endregion
            $scope.obtenerVentas();
        })
        .controller('ventasController',function(DatabaseStorageService,$scope) {
            //region Variables iniciales
            $scope.productos = [];
            //endregion

            $scope.save = function() {
                loadingStart();
                DatabaseStorageService.createFunction("dashboard", $scope.Data())
                    .then(function (response) {
                        console.log(response);
                        loadingStop();
                    }, function errorCallback(response) {
                        $scope.errors = response.data;
                        loadingStop();
                    });
            };

            //region Funciones de carga
            $scope.obtenerProductos = function() {
                loadingStart();
                DatabaseStorageService.getFunction("productos")
                    .then(function (response) {
                        $scope.productos = response.data;
                        loadingStop();
                        //console.log("ventas: ",$scope.ventas);
                    }, function errorCallback(response) {
                        console.log(response);
                        loadingStop();
                    });
            };
            //endregion
            $scope.obtenerProductos();

            $scope.Data = function(){
                return {
                    producto : $scope.form.producto.id,
                    precio_venta : $scope.form.precio,
                    cliente : $scope.form.nombre,
                    estado : $scope.form.estado,
                    valor_abono : $scope.form.abono
                };
            };
        });
})();
