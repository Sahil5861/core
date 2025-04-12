<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Forgot Password | CoreTechInfo </title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin-light/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin-light/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-light/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin-light/assets/css/authentication/form-1.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin-light/assets/css/forms/theme-checkbox-radio.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin-light/assets/css/forms/switches.css')}}">
</head>
<body class="form">
    

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Password Recovery</h1>
                        <p class="signup-link">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>

                        @if(session()->has('status'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ session()->get('status') }}</strong>
                            </div>
                        @endif
                        <form class="text-left" method="POST" action="{{ route('password.email') }}" >
                            @csrf
                            <div class="form">
                                <div id="email-field" class="field-wrapper input">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign"><circle cx="12" cy="12" r="4"></circle><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path></svg>
                                    <input id="email" name="email" type="email" class="form-control" placeholder="Email">
                                    @if ($errors->has('email'))
                                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" class="btn btn-primary" value="">Send</button>
                                    </div>                                    
                                </div>
                            </div>
                        </form>                        
                         <p class="terms-conditions">© 2022 All Rights Reserved. <a href="{{url('/')}}">CoreTechInfo</a> is a product of Designreset. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <div class="l-image">
            </div>
        </div>
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin-light/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('admin-light/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin-light/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin-light/assets/js/authentication/form-1.js')}}"></script>

</body>
</html>