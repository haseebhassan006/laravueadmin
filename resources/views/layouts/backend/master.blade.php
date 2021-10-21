
<!DOCTYPE html>
<html lang="en">
@include('layouts.backend.partials.head')
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      @include('layouts.backend.partials.header')
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        @include('layouts.backend.partials.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body dashboard-2-main">
          <!-- Container-fluid starts-->
          <div class="container-fluid">

          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
     
      </div>
    </div>
    @include('layouts.backend.partials.footer')
  </body>
</html>
