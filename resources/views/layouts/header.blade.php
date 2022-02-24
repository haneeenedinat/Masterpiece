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
    <link rel="stylesheet" href="css2\Donate.css" >

    

   

<!-- cdnj -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- font google -->
<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <a class="nav-a" href="/Donate">Donate</a>
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
      <main>
        @yield('content')
    </main>
