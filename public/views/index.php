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
		<script src="js/services/articleService.js"></script> <!-- load our service -->		
		<script src="js/app.js"></script> <!-- load our application -->

</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="storeApp" ng-controller="mainController">
<div class="col-md-8 col-md-offset-2">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Super Zapatos</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Tiendas</a></li>
            <li><a href="#about">Articulos</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>


	<!-- PAGE TITLE =============================================== -->
	<div class="page-header">
		<h2>Super Zapatos</h2>
		<h4>Sistema de Tiendas</h4>
	</div>

	<!-- LOADING ICON =============================================== -->
	<!-- show loading icon if the loading variable is set to true -->
	<p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>

	<!-- THE STORES =============================================== -->
	<!-- hide these comments if the loading variable is true -->
	<ul>
		<div class="store" ng-hide="loading" ng-repeat="store in stores">
			<div class="row">
				<div class="col-md-1">{{ store.id }}</div>
				<div class="col-md-5">{{ store.name }}</div>
				<div class="col-md-1"><a href="#" ng-click="deleteStore(store.id)" class="text-muted">Borrar</a></div>
				<div class="col-md-1"><a href="#" ng-click="editStore(store.id)" class="text-muted">Editar</a></div>
				<div class="col-md-2"><button ng-click="showArticles" class="btn btn-primary btn-sm">Ver Articulos</button></div>
			</div>
		</div>
	</ul>

	<!-- NEW STORE FORM =============================================== -->
	<form ng-submit="submitStore()"> <!-- ng-submit will disable the default form action and use our function -->
		<div class="panel panel-default">
			<div class="panel-heading">
		    	<h3 class="panel-title">Incluir Tiendas</h3>
		  	</div>
			<div class="panel-body">	
				<div class="form-group">
					<input type="text" class="form-control input-sm" name="name" ng-model="storeData.name" placeholder="Nombre">
				</div>

				<div class="form-group">
					<input type="text" class="form-control input-sm" name="address" ng-model="storeData.address" placeholder="Direccion">
				</div>
				
				<!-- SUBMIT BUTTON -->
				<div class="form-group text-right">	
					<button type="submit" class="btn btn-primary btn-lg">Incluir Tienda</button>
				</div>
			</div>
		</div>
	</form>

</div>
</body>
</html>
	