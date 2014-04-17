var statsController = function ($scope, statsService) {
    $scope.serviceUnavailable = true;
    $scope.instant_usage = 0;

    var controller = this;

    $scope.refresh = function () {
        statsService.getInstanteUsage().then(function (instant_usage) {
            $scope.serviceUnavailable = false;
            $scope.instant_usage = instant_usage.cpucurrent;
        }, controller._onServiceError);
    }


    this._onServiceError = function (status) {
        if ((status == 503 || status == 404) && $scope.serviceUnavailable == false) {
            $scope.serviceUnavailable = true;
            noty({text: 'Service Unavailable', layout: 'topCenter', type: 'warning'});
        }
    }

    window.setInterval(function () {
        $scope.refresh()
    }, 3000);
    return $scope;
}