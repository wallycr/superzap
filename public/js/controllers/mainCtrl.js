angular.module('mainCtrl', [])

	// inject the Store service into our controller
	.controller('mainController', function($scope, $http, Store) {
		// object to hold all the data for the new store form
		$scope.storeData = {};

		// loading variable to show the spinning loading icon
		$scope.loading = true;

		// get all the stores first and bind it to the $scope.stores object
		// use the function we created in our service
		// GET ALL STORES ====================================================
		Store.get()
			.success(function(data) {
				$scope.stores = data.stores;
				$scope.loading = false;
			});

		// function to handle submitting the form
		// SAVE A STORE ======================================================
		$scope.submitStore = function() {
			$scope.loading = true;

			// save the store. pass in store data from the form
			// use the function we created in our service
			Store.save($scope.storeData)
				.success(function(data) {

					// if successful, we'll need to refresh the store list
					Store.get()
						.success(function(getData) {
							$scope.stores = getData;
							$scope.loading = false;
						});

				})
				.error(function(data) {
					console.log(data);
				});
		};

		// function to handle deleting a store
		// DELETE A STORE ====================================================
		$scope.deleteStore = function(id) {
			$scope.loading = true; 

			// use the function we created in our service
			Store.destroy(id)
				.success(function(data) {

					// if successful, we'll need to refresh the store list
					Store.get()
						.success(function(getData) {
							$scope.stores = getData;
							$scope.loading = false;
						});

				});
		};

	});