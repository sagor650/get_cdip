<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<head>
    <title>REGISTER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('assets/frontend/login/css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('assets/frontend/login/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('assets/frontend/login/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('assets/frontend/login/css/font.css')}}" type="text/css"/>
    <link href="{{asset('assets/frontend/login/css/font-awesome.css')}}" rel="stylesheet">
    <!-- //font-awesome icons -->
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="{{asset('assets/frontend/login/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="reg-w3" >
    <div class="w3layouts-main">
        <h2>Register Now</h2>
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <label for="username" >{{ __('User ID') }}</label>
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}"  required autofocus>
            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="name" >{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="email" >{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror



            <label for="password" >{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

            <label for="phone" >{{ __('Phone') }}</label>
            <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"  required autocomplete="phone" autofocus>

            @error('phone')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <label for="gender" >{{ __('Gender') }}</label>
            <select class="form-control" name="gender" id="gender">
                <option value="male" default>Male</option>
                <option value="female">Female</option>
            </select>

            <label for="image" >{{ __('Photo') }}</label>
            <input  type="file" class="form-control @error('image') is-invalid @enderror" name="image"   autofocus>

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <label for="address" >{{ __('Address') }}</label>
            <textarea name="address" id="address" cols="45" rows="5" autofocus></textarea>



            <div class="form-group">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Course</label>
                    </div>
                    <select class="custom-select" id="course_id" name="course_id" >
                        <option selected>Choose...</option>
                        @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                </div>








                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Batch</label>
                        </div>
                        <select class="custom-select" id="batch_id" name="batch_id">
                            <option selected>Choose...</option>
{{--                        value from script--}}

                        </select>
                    </div>


            </div>

            <h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>

            <div class="clearfix"></div>
            <input type="submit" value="submit" name="register">
        </form>
        <p>Already Registered.<a href="login">Login</a></p>
    </div>
</div>
<script src="{{asset('assets/frontend/login/js/bootstrap.js')}}"></script>
<script src="{{asset('assets/frontend/login/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('assets/frontend/login/js/scripts.js')}}"></script>
<script src="{{asset('assets/frontend/login/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('assets/frontend/login/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{asset('assets/frontend/login/js/flot-chart/excanvas.min.js')}}"></script><![endif]-->
<script src="{{asset('assets/frontend/login/js/jquery.scrollTo.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function()
        {

            $("#course_id").change(function()
            {
                $("#batch_id").empty();
                var id=$(this).val();
                console.log(id);
                var dataString = 'id='+ id;
                console.log(dataString);
                $.ajax
                ({
                    type: "GET",
                    url: "{{url('/batch')}}",
                    data: dataString,
                    cache: false,
                    success: function(response)
                    {
                        for (var i = 0; i <response.length ; i++) {
                            console.log(response[i].name);
                            var x = document.getElementById("batch_id");
                            var option = document.createElement("option");
                            option.text =response[i].name ;
                            option.value =response[i].id ;
                            x.add(option);
                        }


                    }
                });

            });

        });
</script>


</body>
</html>
