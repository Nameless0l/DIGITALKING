<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>King Digital Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/mdi/css/materialdesignicons.min.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  {{-- <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
  <script src="{{asset('vendors/tinymce/tinymce/tinymce.min.js')}}" referrerpolicy="origin" ></script>
  {{-- <script src="https://cdn.tiny.cloud/1/mci331aanhykh06z55kd30loiholqd0lrughzubswk4lxzry/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <img src="../../images/logo.svg" alt="logo">
                  </div>
                  <h4>Hello! let's get started</h4>
                  <h6 class="font-weight-light">Sign in to continue.</h6>
                  <form action="{{route('login')}}" method="post" class="pt-3">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email">
                    </div>
                    @if ($errors->has('email'))
                    <ul class ='text-sm text-red-600 space-y-1'>
                        @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    @if ($errors->has('password'))
                    <ul class ='text-sm text-red-600 space-y-1'>
                        @foreach ($errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                        @endif
                    <div class="mt-3">
                      <button  type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                    </div>
                    <div class="my-2 d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          Keep me signed in
                        </label>
                      </div>
                      <a href="#" class="auth-link text-black">Forgot password?</a>
                    </div>
                    <div class="mb-2">
                      <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                        <i class="ti-facebook mr-2"></i>Connect using facebook
                      </button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Don't have an account? <a href="register.html" class="text-primary">Create</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{asset('vendors/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.j')}}s"></script>
  <script src="{{asset('js/dataTables.select.min.js')}}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{asset('js/off-canvas.js')}}"></script>
  <script src="{{asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('js/template.js')}}"></script>
  <script src="{{asset('js/settings.js')}}"></script>
  <script src="{{asset('js/todolist.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('js/dashboard.js')}}"></script>
  <script src="{{asset('js/Chart.roundedBarCharts.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>

