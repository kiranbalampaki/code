<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <title>{{config('app.name', 'ADOPTME')}}</title>

    <style>
        body{
            background-color:white;
        }

        .navbar-nav .active{
            border-bottom:5px solid #55dcd6;
        }

        .navbar-nav a{
            min-width:65px;
            letter-spacing:1px;
            text-align:center;
            text-transform:uppercase;
            color:black;
        }

        .navbar{
            font-family:Montserrat;
            font-size:12px;
            letter-spacing: 1px;
            padding-bottom:0;
        }

        .navbar-nav a:hover{
            color:white;
            background-color:#55dcd6;
            transition: all 0.3s;
        }

        .bannerbutton{
            color:#55dcd6;
            border-radius:50px;
            font-size:1.5vw;
            border:2px solid #55dcd6;
        }

        .bannerbutton:hover{
            color:white;
            background-color:#55dcd6;
        }

        .banner{
            font-family:Gotham;
            color:#666666;
            background-image : url({{asset('assets/landingimages/banner.png')}});
            background-size : cover;
            object-fit: contain;
            background-repeat:no-repeat;
            background-size:contain;
            background-position:center;
            height:90vh;
        }

        .infobanner{
            background-image : url({{asset('assets/landingimages/infobanner.png')}});
            background-repeat:no-repeat;
            background-position:center;
            object-fit: contain;
        }
        
        .overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        height: 100%;
        width: 100%;
        opacity: 0;
        transition: .5s ease;
        background-color: #55dcd6;
        }

        .petcard:hover .overlay {
        opacity: 1;
        }

        .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
        }

</style>

</head>
<body>

    <nav class="navbar navbar-expand-lg static-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/landingimages/logo/logo.png')}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pets.index')}}">Pets</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.index')}}">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/help">How It Works</a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>         
                @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->firstname }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                @if(Auth::user()->user_type == 'admin')
                                    <li><a class="nav-link" href="{{ route('admin.index') }}">Dashboard</a></li>
                                @else
                                    <li><a class="nav-link" href="{{ route('user.index') }}">Dashboard</a></li>
                                @endif
                                    
                                    <li>
                                        <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
            </ul>
            </div>
        </div>
    </nav>
    @include('flash-message')
    @yield('content')

    <section class="bg-light py-2">
        <div class="container-fluid text-center text-white">
            <a class="navbar-brand" href="#">
                <img src="{{asset('assets/landingimages/logo/logo.png')}}" alt="">
            </a><br>
            <span class="fa-2x" style="color:#CCCCCC;">
                <i class="fa fa-instagram mx-2"></i>
                <i class="fa fa-facebook mx-2"></i>
                <i class="fa fa-twitter mx-2"></i>
                <i class="fa fa-rss mx-2"></i>
                <i class="fa fa-youtube mx-2"></i>
            </span>
        <hr>
        <p style="color:grey;">© 2018 Copyright : Kiran Balampaki</p>
        </div>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
</body>
</html>