<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css2\header.css" >
    <link rel="stylesheet" href="css2\Footer.css" >
    <link rel="stylesheet" href="css2\index.css" >
    <link rel="stylesheet" href="css2\contactus.css" >

   

<!-- cdnj -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- font google -->
<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .justify-content-center{
          margin:3em 0;
        }
        .btn-link{
            text-decoration:none;
            color:black;
        }
        .btn-primary{
            background:black;
            color:white;
            border:none;
        }
        .btn-primary:hover{
            background:black;
            color:white;
            border:none;
        }

       .card-header {
            background-color: black;
            color:white;
        }

        
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
          <h1> <a href="/" class="navbar-brand">Donate</a></h1> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" />
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
            <a class="nav-a active" aria-current="page" href="/" >Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-a" href="/">Donate</a>
            </li>
            <li class="nav-item">
            <a class="nav-a" href="/contact-us">ContactUs</a>
            </li>


          
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-a" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-a" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                              
                                @if(Auth::user()->role=="admin")
                                <a  href="admin/admin"
                                     >
                                        {{ __('dashboard') }}
                                    </a>
                                    @endif
                            
                                    <a  href="{{ route('logout') }}"
                                    class="nav-a"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                             
                            </li>
                        @endguest
            </ul>     
      </div>
      </div>
      </nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
<div class="Footer">

<div class="FooterInformation">

<div class="FooterpageLink">
  <ul>
  <li><h3>Page links</h3></li>
  <li><a href='#'>Home</a></li>
  <li><a href='#'>Donors</a></li>
  <li>Contact us</li>
  </ul>
</div>

<div class="FooterContactUs">
  <ul>
  <li><h3>Contact Us</h3></li>
  <li>Address :Jordan-Amman </li>
  <li>Phone: 0777745263</li>
  <li> Email: Donate@gmail.com </li>
  </ul>
</div>

<div class="FooterSocialMedia">
<ul> 
  <h3>Social Media</h3>
  <li > <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
   <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook"></i></a>
   <a href="https://www.instagram.com/" class="instagram"><i class="fab fa-instagram"></i></a >
   <a href="https://www.linkedin.com/feed/" class="linkedin"><i class="fab fa-linkedin"></i></a>
   <a href="https://github.com/haneeenedinat" class="github"><i class="fab fa-github"></i></a>
  </li>
  </ul>
</div>

</div>

<div class="FooterCopyright">
  <p>&copy;2022 Donate</p>
</div>

</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

 </body>

</html>
