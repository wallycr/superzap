	<!-- app/views/index.php -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Super Zapatos</title>

	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
	<style>
		body 		{ padding-top:30px; }
		form 		{ padding-bottom:20px; }
		.store 	{ padding-bottom:20px; }
	</style>

	<!-- JS -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

	<!-- ANGULAR -->
	<!-- all angular resources will be loaded from the /public folder -->
		<script src="js/controllers/mainCtrl.js"></script> <!-- load our controller -->
		<script src="js/services/storeService.js"></script> <!-- load our service -->
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="storeApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

	<!-- PAGE TITLE =============================================== -->
	<div class="page-header">
		<h2>Super Zapatos</h2>
		<h4>Sistema de Tiendas</h4>
	</div>

	<!-- NEW STORE FORM =============================================== -->
	<form ng-submit="submitStore()"> <!-- ng-submit will disable the default form action and use our function -->

		<!-- AUTHOR -->
		<div class="form-group">
			<input type="text" class="form-control input-sm" name="name" ng-model="storeData.name" placeholder="Nombre">
		</div>

		<!-- STORES TEXT -->
		<div class="form-group">
			<input type="text" class="form-control input-lg" name="address" ng-model="storeData.address" placeholder="Direccion">
		</div>
		
		<!-- SUBMIT BUTTON -->
		<div class="form-group text-right">	
			<button type="submit" class="btn btn-primary btn-lg">Aceptar</button>
		</div>
	</form>

	<!-- LOADING ICON =============================================== -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE STORES =============================================== -->
	<!-- hide these comments if the loading variable is true -->
	<ul>
		<div class="store" ng-hide="loading" ng-repeat="store in stores">
			<li> {{ store.id }} - {{ store.name }} <span><a href="#" ng-click="deleteStore(store.id)" class="text-muted">Borrar</a></span></li>
		</div>
	</ul>

</div>
</body>
</html>
	