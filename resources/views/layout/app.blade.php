@include('layout.header')
        <!-- Navigation -->
@include('layout.sidebar')
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        <!-- conten 1 -->
        @yield('content')

      </div>
      <div class="row mt-5">
       <!-- conten 3 -->
        <div class="col-xl-4">
          <!-- conten 5 -->
        </div>
      </div>
      <!-- Footer -->
@include('layout.footer')
