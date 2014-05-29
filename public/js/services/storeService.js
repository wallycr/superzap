angular.module('storeService', [])

	.factory('Store', function($http) {

		return {
			// get all the Stores
			get : function() {
				return $http.get('/api/v1/store');
			},

			// save a store 
			save : function(storeData) {
				return $http({
					method: 'POST',
					url: '/api/v1/store',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(storeData)
				});
			},

			// destroy a store
			destroy : function(id) {
				return $http.delete('/api/v1/store/' + id);
			}
		}

	});