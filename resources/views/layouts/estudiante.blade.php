<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>{{ config('app.name', 'Admgestion') }}</title>
	

	<!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfilestudiante.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet">

<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>

<body>
	<!--BARRA DE INICIO-->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Gestion</span>AD</a>
				<ul class="nav navbar-top-links navbar-right">
					
				</ul>
			</div>
		</div>
	</nav>
	<!--FIN DE LA BARRA DE INICIO-->

    <!--BARRA HORIZONTAL DE OPCIONES-->
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<!--PRIMER CUADRO EN DND ESTA LA FOTO Y NOMBRE DEL USUARIO-->
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Laura Rincon</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
        <!--FIN DEL PRIMER CUADRO-->
        <!--SEGUNDO CUADRO EN DND ESTA LA BARRA DE BUSQUEDA-->
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Buscar...">
			</div>
		</form>
		<!--FIN DEL SEGUNDO CUADRO-->
		<!--TERCER CUADRO DND ESTA EL MENU DE OPCIONES-->
		<ul class="nav menu">
			<li class="active"><a href="perfilestudiante.html"><em class="fa fa-home">&nbsp;</em> Home</a></li>
			<li><a href="widgets.html"><em class="fa fa-cart-plus">&nbsp;</em> Realizar Solicitud</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Ver estado de la Solicitud</a></li>
			<li><a href="elements.html"><em class="fa fa-plus">&nbsp;</em> Solicitar Programas</a></li>
			<li><a href="panels.html"><em class="fa fa-comment">&nbsp;</em> Sugerencias &amp;  Quejas</a></li>
			<li><a href="panels.html"><em class="fa fa-user">&nbsp;</em> Perfil</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
		<!--FIN DEL TERCER CUADRO-->
	</div>
	<!--FIN BARRA HORIZONTAL DE OPCIONES-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
        <!--BARRA HOME-->
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Home</li>
			</ol>
		</div>
		<!--FIN BARRA HOME-->

        @yield('content')
	</div>

<!--CALENDARIO
	<div class="col-xs-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Calendar
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div id="calendar"></div>
					</div>
				</div>
			</div>
				FIN CALENDARIO-->



<div class="col-sm-12">
				<p class="back-link">Gestion AD <a href="https://www.medialoot.com">UCLA.EDU.VE</a></p>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>

</html>