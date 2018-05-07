<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <center><li class="small-logo"><a href="{{ route('index') }}"><img style="width: 50px;height: 50px" src="{{ URL::asset('img/smk.png') }}" alt=""></a></li></center>
                <center><a href="" class="text-themecolor">Welcome, Admin1</a></center>
                <hr>
                <li> <a class="waves-effect waves-dark" href="{{ route('homeadmin') }}" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('datasiswa') }}" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Data Siswa</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ route('databuku') }}" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Data Buku</span></a>
                </li>
            </ul>
            <div class="text-center m-t-30">
                <hr>
                <p class="hidden-md-down" style="font-size:12px"> All Right Reserved<br>2018</p>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->