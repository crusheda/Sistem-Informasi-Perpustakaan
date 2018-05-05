<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<head>

	<title>Home - Perpustakaan</title>
	<link rel="icon" href="{{ URL::asset('img/smk.png') }}" type="image/png">
	<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" type="text/css" href="{{ URL::asset('/bootstrap/css/bootstrap.css') }}">
	<link href="{{ URL::asset('/assetshome/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/style.css') }} " rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/responsive.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('/assetshome/css/animate.css') }}" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="{{ URL::asset('/bootstrap/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.1.8.3.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/bootstrap.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery-scrolltofixed.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.easing.1.3.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/jquery.isotope.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/wow.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/assetshome/js/classie.js') }}"></script>
</head>

<body>

	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure style="margin-bottom: : 50px" class="logo animated fadeInDown delay-07s">
				<a style="" href=""><img src="{{ URL::asset('img/smk.png') }}" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">SISTEM INFORMASI PERPUSTAKAAN</h1>
			<ul class="we-create animated fadeInUp delay-1s">
				<li>SMK NEGERI 1 PLERET</li>
			</ul>
			<a class="link animated fadeInUp delay-1s servicelink" href="#daftar">Isi Daftar Pengunjung</a>
		</div>
	</header>
	<!--header-end-->

	<nav class="main-nav-outer" id="test">
		<!--main-nav-start-->
		<div class="container">
			<ul class="main-nav">
				<div class="row">
  					<div class="col-sm-3">
  						<li><a href="#caribuku">Statistik Pengunjung</a></li>
  					</div>
  					<div class="col-sm-2">
  						<li><a href="#daftar">Daftar Pengunjung</a></li>
  					</div>
  					<div class="col-sm-2">
  						<li class="small-logo"><a href="#header"><img style="width: 50px;height: 50px" src="{{ URL::asset('img/smk.png') }}" alt=""></a></li>
  					</div>
  					<div class="col-sm-2">
  						<li><a href="{{ route('caribuku') }}">Cari Buku</a></li>
  					</div>
  					<div class="col-sm-3">
  						<li><a href="{{ route('loginadmin') }}">Admin</a></li>
  					</div>						
			</ul>
			<a class="res-nav_click" href="#"><i class="fa fa-bars"></i></a>
		</div>
	</nav>
	<!--main-nav-end-->



	<section class="main-section" id="caribuku">
		<!--main-section-start-->
		<div class="container">
			<h2>Statistik Pengunjung</h2>
			<h6>Daftar Pengunjung Perpustakaan Hari Ini</h6>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-2">
					<a class="list-group-item visitor">
						<h3 class="pull-right">
							<i class="fa fa-eye"></i>
						</h3>
						<h4 class="list-group-item-heading count">
							1000</h4>
							<p>Baca Buku</p>
					</a>
				</div>
				<div class="col-md-2" style="margin-left:10px;margin-right:10px">
					<a class="list-group-item visitor">
						<h3 class="pull-right">
							<i class="fa fa-eye"></i>
						</h3>
						<h4 class="list-group-item-heading count">
							1000</h4>
							<p>Pinjam Buku</p>
					</a>
				</div>
				<div class="col-md-2">
					<a class="list-group-item visitor">
						<h3 class="pull-right">
							<i class="fa fa-eye"></i>
						</h3>
						<h4 class="list-group-item-heading count">
							1000</h4>
							<p>Mengembalikan Buku</p>
					</a>
				</div>
				<div class="col-md-3"></div>
			</div>
			<br>
			<center><p>Total Pengunjung : <a><h2>3000</h2></a></p></center>
		</div>
	</section>
	<!--main-section-end-->

	<section class="business-talking">
		<!--business-talking-start-->
		<div class="container">
			<h2>Isi Data Pengunjung</h2>
		</div>
	</section>
	<!--business-talking-end-->
	<div class="container" id="daftar">
		<section class="main-section contact" id="contact">
		<div class="">
			<center><a><h3>Mohon Mengisi Daftar Pengunjung Terlebih Dahulu</h3></a></center>
			<div class="form">
				<form action="" method="post" role="form" class="contactForm">
					<div class="form-group">
						<input type="text" name="name" class="form-control input-text" id="name" placeholder="Nama Lengkap" data-rule="minlen:2" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control input-text" name="nis" id="nis" placeholder="Nomer Induk Siswa" data-rule="minlen:2"/>
						<div class="validation"></div>
					</div>
					<a><h3>Keperluan	: </h3></a>
					<input type="checkbox" aria-label="" id=""><a> Baca Buku</a><br>
					<input type="checkbox" aria-label="" id=""><a> Pinjam Buku</a><br>
					<input type="checkbox" aria-label="" id=""><a> Mengembalikan Buku</a><br>
					<div class="text-center"><button type="submit" class="input-btn">Submit</button></div>
				</form>
			</div>
		</div>
		</section>
	</div>

	
	@include("footer")	

	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#test').scrollToFixed();
			$('.res-nav_click').click(function() {
				$('.main-nav').slideToggle();
				return false

			});

		});
	</script>

	<script>
		wow = new WOW({
			animateClass: 'animated',
			offset: 100
		});
		wow.init();
	</script>


	<script type="text/javascript">
		$(window).load(function() {

			$('.main-nav li a, .servicelink').bind('click', function(event) {
				var $anchor = $(this);

				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top - 102
				}, 1500, 'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				if ($(window).width() < 768) {
					$('.main-nav').hide();
				}
				event.preventDefault();
			});
		})
	</script>

	<script type="text/javascript">
		$(window).load(function() {


			var $container = $('.portfolioContainer'),
				$body = $('body'),
				colW = 375,
				columns = null;


			$container.isotope({
				// disable window resizing
				resizable: true,
				masonry: {
					columnWidth: colW
				}
			});

			$(window).smartresize(function() {
				// check if columns has changed
				var currentColumns = Math.floor(($body.width() - 30) / colW);
				if (currentColumns !== columns) {
					// set new column count
					columns = currentColumns;
					// apply width to container manually, then trigger relayout
					$container.width(columns * colW)
						.isotope('reLayout');
				}

			}).smartresize(); // trigger resize to set container width
			$('.portfolioFilter a').click(function() {
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');

				var selector = $(this).attr('data-filter');
				$container.isotope({

					filter: selector,
				});
				return false;
			});

		});
	</script>

	</div>
</body>
</html>