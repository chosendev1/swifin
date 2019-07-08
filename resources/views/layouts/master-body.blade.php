@extends('layouts.master')
    @section('body')
<body class="animsition site-navbar-small ">
    @include('layouts.navbar',['username' => session('username')]) 
        @include('layouts.menu') 

      <!-- Page -->
    {{-- <div class="page">
      <div class="page-content">
        @yield('content')
      </div>
    </div> --}}
    <!-- End Page -->
    <!-- page -->
    <div class="page">
      @include('layouts.breadcrumb',['user_balance' => session('account_balance')]) 

      <div class="page-content">
        <div class="panel">
          {{-- @include('layouts.page_title') --}}
          <div class="panel-body">
            @yield('content')
          </div>
        </div>
      </div>
    </div>
	<!-- End Page -->
	 <footer class="site-footer">
      <div class="site-footer-legal">© 2019 <a href="javascript:void(0)">Swifin</a></div>
      <!-- <div class="site-footer-right">
        Crafted with <i class="red-600 icon md-favorite"></i> by <a href="javascript:void(0)">Creation Studio</a>
      </div> -->
    </footer>
	 @endsection

