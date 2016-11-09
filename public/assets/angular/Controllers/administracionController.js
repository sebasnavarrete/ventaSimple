(function(){
    angular.module('Comunicapp')
        .controller('administracionController',function(DatabaseStorageService,$scope) {
            //region Funciones de carga
            $scope.obtenerProductos = function() {
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
            $scope.borrar = function(id) {
                var msgConfirm = 'Desea eliminar el producto ?';
                if(confirm(msgConfirm)) {
                    loadingStart();
                    DatabaseStorageService.deleteFunction("productos" ,id)
                        .then(function (data) {
                            console.log(data);
                            $scope.obtenerProductos();
                        }, function errorCallback(error) {
                            console.log(error);
                            loadingStop();
                    });
                }
            };
            //endregion
            $scope.obtenerProductos();
        })
        .controller('productosController',function(DatabaseStorageService,$scope) {
            var formdata = new FormData();
            $scope.tiendas = [{
                value: 'Ebay',
                label: 'Ebay'
            }, {
                value: 'AliExpress',
                label: 'AliExpress'
            }];
            $scope.capacidades = [
                { value: '4gb', label: '4gb'},
                { value: '8gb', label: '8gb'},
                { value: '16gb', label: '16gb'},
                { value: '16gb', label: '16gb'},
                { value: '32gb', label: '32gb'},
                { value: '64gb', label: '64gb'}];

            $scope.save = function() {
                loadingStart();
                DatabaseStorageService.createFunction("productos", $scope.Data())
                    .then(function (response) {
                        console.log(response);
                        loadingStop();
                    }, function errorCallback(error) {
                        console.log(error);
                        loadingStop();
                    });
            };


            $scope.getTheFiles = function ($files) {
                console.log($files);
                angular.forEach($files, function (value, key) {
                    formdata.append(key, value);
                });
            };

            $scope.Data = function(){
                return {
                    nombre : $scope.form.nombre,
                    descripcion : $scope.form.descripcion,
                    capacidad : $scope.form.capacidad.value,
                    imagen : $scope.form.imagen,
                    compra : $scope.form.compra,
                    venta : $scope.form.venta,
                    tienda : $scope.form.tienda.value
                };
            };
        });

})();
