<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Email: heyalexluna@gmail.com
* Version: 1.1
* Author: Alexis Luna
* Copyright 2019 Alexis Luna
* Website: https://github.com/mralexisluna/bootstrap-simple-admin-template
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Start Bootstrap</title>

    <link href="{{asset('cpanel/assets/vendor/bootstrap4/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('cpanel/assets/css/auth.css')}}" rel="stylesheet">
    
</head>
<body>
    <div class="wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <img class="brand" src="{{asset('cpanel/assets/img/bootstraper-logo.png')}}" alt="bootstraper logo">
                    </div>
       
                   
                    <form action="{{url('/login')}}" method="get">
                       
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="form-group text-left">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                                <label class="custom-control-label" for="remember-me">Remember me</label>
                            </div>
                        </div>
                        <button class="btn btn-primary shadow-2 mb-4">Login</button>
                    </form>
                    <p class="mb-2 text-muted">Forgot password? <a href="forgot-password.html">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="signup.html">Signup</a></p>
                </div>
                @if ($errors->any())
                <div class="btn-block  btn btn-lg btn-danger" style="disply:non;">
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <script src="{{asset('cpanel/assets/vendor/jquery3/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('cpanel/assets/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>

</body>
</html>