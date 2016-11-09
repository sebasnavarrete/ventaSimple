(function(){
    angular.module('Comunicapp')
        .controller('messageController',function($scope) {
            //region Variables iniciales
            $scope.showbtndel = false;
            $scope.tittle = 'Enviar Mensaje';
            $scope.step = 1;
            $scope.stepdone1 = false;
            $scope.stepdone2 = false;

            $scope.nextStep = function () {
                switch ($scope.step) {
                    case 1:
                        $scope.stepdone1 = true;
                        break;
                    case 2:
                        $scope.stepdone2 = true;
                        break;
                }
                $scope.step ++;
            };
            $scope.previousStep = function () {
                $scope.step --;
            };


        });
})();
