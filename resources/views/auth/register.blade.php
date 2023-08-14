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
                  <h4>New here?</h4>
                  <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                  <form action="{{route('register')}}" method="post" class="pt-3">
                    @csrf
                    <div class="form-group">
                      <input type="text" name="name" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Email">
                    </div>
                      @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    {{-- <div class="form-group">
                      <select class="form-control form-control-lg"  id="exampleFormControlSelect2">
                        <option>Country</option>
                        <option>United States of America</option>
                        <option>United Kingdom</option>
                        <option>India</option>
                        <option>Germany</option>
                        <option>Argentina</option>
                      </select>
                    </div> --}}
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="mb-4">
                      <div class="form-check">
                        <label class="form-check-label text-muted">
                          <input type="checkbox" class="form-check-input">
                          I agree to all Terms & Conditions
                        </label>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">SIGN UP</button>
                    </div>
                    <div class="text-center mt-4 font-weight-light">
                      Already have an account? <a href="login.html" class="text-primary">Login</a>
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

