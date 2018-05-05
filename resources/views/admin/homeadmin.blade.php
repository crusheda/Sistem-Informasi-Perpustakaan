<!doctype html>
<html>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>Portal Admin - Perpustakaan</title>
	<link rel="icon" href="{{ URL::asset('img/smk.png') }}" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="{{ URL::asset('/assetsadmin/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- styles -->
	<link href="{{ URL::asset('/assetsadmin/css/style.css') }} " rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
	<hr>
	<div class="header">
		<div class="row">
			<div class="col-sm-2">
				<center><img style="width:80px;height:80px" class="img-responsive"  src="{{ URL::asset('img/smk.png') }}" alt=""></center>
			</div>
			<div class="col-md-10">
				<!-- Logo -->
				<div class="logo">
					<h2 style="font-family:Roboto">Halaman Admin Perpustakaan</h2>
				</div>
			</div>
		</div>
	</div>
	<hr>
		
	<!--Main Content -->
	<div class="page-content">		
		<div class="row">
			<div class="col-sm-2">
				@include("admin/component/sidebar")
			</div>
			<div class="col-sm-10">
				<div class="row">
					<div class="col-md-6">					
						<div class="list-group-item"> CEK CEK</div>
					</div>

					<div class="col-md-6">
						<div class="tab-content"> CEK CEK</div>
					</div>
				</div>					
			</div>
		</div>
	</div>

	@include("admin/component/footer")
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('/assetsadmin/bootstrap/js/bootstrap.min.js') }} "></script>
    <script src="{{ URL::asset('/assetsadmin/js/custom.js') }} "></script>
</body>
</html>