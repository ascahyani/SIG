<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from lexa-node-vert.ourdemo.website/pages-login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:51:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Lexa - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <link rel="shortcut icon" href="/assets/assets/images/dinkes.jpg">

        <link href="assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="assets/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/assets/css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center m-0">
                        <a href="" class="logo logo-admin"><img src="/assets/assets/images/dinkes.jpg" height="100" alt="logo"></a>
                    </h3>

                    <div class="p-3">
                        <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                        <p class="text-muted text-center">Silahkan lakukan login untuk masuk sebagai Admin.</p>
                        <form class="form-horizontal m-t-30" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}>
                            
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="username">Email</label>
                                <input id="email" type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                            </div>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" placeholder="Enter password" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group row m-t-20">
                                
                                <div class="col-12 text-right">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>

                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p> © 2019 Asti Cahyani-Ilmu Komputer Universitas Lampung </p>
            </div>

        </div>

          <!-- jQuery  -->
  <script src="assets/assets/js/jquery.min.js"></script>
  <script src="assets/assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/assets/js/metisMenu.min.js"></script>
  <script src="assets/assets/js/jquery.slimscroll.js"></script>
  <script src="assets/assets/js/waves.min.js"></script>

  <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

  <!-- App js -->
  <script src="assets/assets/js/app.js"></script>

</body>

<!-- Mirrored from lexa-node-vert.ourdemo.website/pages-login by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Feb 2019 07:51:38 GMT -->
</html>
