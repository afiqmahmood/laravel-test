<!doctype html>
<html @lang('en')>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body id="page-top" >
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            @if(session('email'))
            <a class="navbar-brand" href="{{ url('/main') }}">
                 Your Story - {{ Session::get('email') }}          
                </a>
@else
<a class="navbar-brand" href="{{ url('/') }}">
                 Your Story            
                </a>
          
@endif
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    @if(!session('email'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('login') }}"> Login</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url('register') }}"> Register</a>                            
                          </li>
                          @else
                          <li class="nav-item">
                                <a class="nav-link" href="{{ url('main') }}"> Main</a>
                         </li>
                          <li class="nav-item">
                                <a class="nav-link" href="{{ url('profile') }}"> Profile</a>
                         </li>
                         <li class="nav-item">
                                <a class="nav-link" href="{{ url('logout') }}"> Log Out</a>
                         </li>
                         @endif
                    </ul>
                </div>
            </div>
        </nav>
<div >
  @yield('content')
</div>

 </body>
</html>