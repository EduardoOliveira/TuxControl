var statsService = function ($http, $q) {
    this._url = "/stats/api/cpu/";
    this._instante_usage = "instant_usage";
    var service = this;

    this.getInstanteUsage = function () {
        var deferred = $q.defer();

        $http.get(this._url + this._instante_usage, {format: "json"})
            .success(function (data, status) {
                deferred.resolve(data);
            })
            .error(function (data, status, headers) {
                deferred.reject(status);
            });

        return deferred.promise;
    }

}