@include ("admin/component/header")
<title>Data Siswa - Perpustakaan</title>
</head>
<body class="fix-header fix-sidebar card-no-border">
	@include ("admin/component/sidebar")
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Portal Admin</h3>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down"> LOGOUT</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
					<!-- Column -->
					<div class="col-md-8">
						<div class="card"> 
							{{-- <div class="card-block bg-info">
								<h4 class="text-white card-title">My Contacts</h4>
								<h6 class="card-subtitle text-white m-b-0 op-5">Checkout my contacts here</h6>
							</div>                            --}}
							<div class="card-block">
								<div class="message-box contact-box">
									<div class="message-widget contact-widget">
										<table class="table table-striped">
											<thead>
												<tr>
												<th scope="col">No</th>
												<th scope="col">Nama Siswa</th>
												<th scope="col">NIS</th>
												<th scope="col">Log</th>
												<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												<th scope="row">1</th>
												<td>Abed</td>
												<td>15650099</td>
												<td>Mon, May | 13:58:22 2018</td>
												<td><button class="btn btn-warning">HAPUS</button></td>
												</tr>
											</tbody>
											{{-- <nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end">
													<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1">Previous</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
													<a class="page-link" href="#">Next</a>
													</li>
												</ul>
											</nav> --}}
										</table>
									</div>                                        
								</div>
							</div>							
						</div>
					</div>
					<div class="col-md-4">
						<div class="card">
							<div class="card-block">
								<div class="message-box contact-box">
									<h2 class="add-ct-btn"><button type="button" class="btn btn-circle btn-lg btn-success waves-effect waves-dark">+</button></h2>
									<form class="form-horizontal form-material">
										<div class="form-group">
											<label class="col-md-12">Nama Lengkap</label>
											<div class="col-md-12">
												<input type="text" placeholder="" class="form-control form-control-line" name="">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-12">NIS</label>
											<div class="col-md-12">
												<input type="text" onkeyup="this.value=this.value.replace(/[^\d+]/,'')" placeholder="" class="form-control form-control-line" name="" id="">
											</div>
										</div>
										<div class="form-group">
											<div class="col-sm-12">
												<center><button class="btn btn-success">Tambah Siswa</button></center>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2018 UIPro Admin by Bootstrap </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
</body>

</html>
