<!DOCTYPE html>

<html lang="en">


<head>
@include('Layout.partials.head')

</head>


<body>
<div class="container-scroller">

  @include('Layout.partials._navbar')
  <div class="container-fluid page-body-wrapper">

    @include('Layout.partials._sidebar')

    <div class="main-panel">

      @yield('content-wrapper')
      

      <!-- content-wrapper ends -->

      @include('Layout.partials._footer')

    </div>

    <!-- main-panel ends -->

  </div>


  <!-- page-body-wrapper ends -->

</div>

<!-- container-scroller -->
@include('Layout.partials.footerscript')

</body>

</html>
