
<!DOCTYPE HTML>
<html>

<head>
    <title>admin panel</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Green login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Stylesheets -->
    <link href="{{ asset('/') }}admin-panel/admin-login/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin-panel/admin-login/css/style.css" rel='stylesheet' type='text/css' />
    <!--// Stylesheets -->
    <!--fonts-->
    <!-- title -->
    <link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
    <!-- body -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
<h1>Admin login Form </h1>
<div class="w3ls-login box box--big">
    <!-- form starts here -->
        {!! Form::open(['route'=>'login', 'method'=>'post']) !!}
        <img src="{{ asset('/') }}admin-panel/admin-login/images/icon.png" alt="" />
        <div class="agile-field-txt">
            <label>
                <i class="fa fa-user" aria-hidden="true"></i> Email</label>
            <input type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="email " value="{{ old('email') }}" required autofocus />

            @if ($errors->has('email'))
                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
            @endif

        </div>
        <div class="agile-field-txt">
            <label>
                <i class="fa fa-lock" aria-hidden="true"></i> password</label>
            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="myInput" />

            @if ($errors->has('password'))
                <span class="invalid-feedback text-danger" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
            @endif


            <div class="agile_label">
                <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
                <label class="check" for="check3">Show password</label>
            </div>
            <div class="agile-right">
                <a href="#">forgot password?</a>
            </div>
        </div>
        <!-- script for show password -->
        <script>
            function myFunction() {
                var x = document.getElementById("myInput");
                if (x.type === "password") {
                    x.type = "text";
                } else {
                    x.type = "password";
                }
            }
        </script>
        <!-- //end script -->
        <div class="w3ls-bot">
            <div class="switch-agileits">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                    keep me signed in
                </label>
            </div>
            <input type="submit" value="LOGIN">
        </div>
    {!! Form::close() !!}

</div>
<!-- //form ends here -->
<!--copyright-->
<div class="copy-wthree">
    <p>© 2018 admin login Form . All Rights Reserved | Design by
        <a href="http://w3layouts.com/" target="_blank">Himel</a>
    </p>
</div>
<!--//copyright-->
</body>
</html>