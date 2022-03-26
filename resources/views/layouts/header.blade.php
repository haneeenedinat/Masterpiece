<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <link rel="stylesheet" href="{{asset('css2\header.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\Footer.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\index.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\contactus.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\Donate.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\clothes.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\profile.css')}}" >
    <link rel="stylesheet" href="{{asset('css2\About.css')}}" >


    <meta
      name="description"
      content="The first smart application in Jordan, that allows you to get rid of old and used clothes, 
      through this application you can choose the appropriate time and receive what you want to donate from 
      clothes, shoes, bags and other things that you want to get rid of to save your precious time,
       and to reduce transportation burdens, we invite you to And your friends for this app,
        so you can make a difference in philanthropy, and show good as an actor."/>
    <meta
      name="keywords"
      content=" Donate , Clothes , volunteers , beneficiaries 
       ,Men clothes, women clothes ,children clothes, Donation form ,Donations Receipt"
    />
    <meta name="author" content="Haneen edinat" />


<!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>



<!-- cdnj -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- font google -->
<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Roboto&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
          <h1> <a href="/" class="navbar-brand">clothes house</a></h1> 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" />
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          
            <li class="nav-item">
            <a class="nav-a active" aria-current="page" href="/" >Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-a active" aria-current="page" href="/about-us" >About Us</a>
            </li>
          
            <li class="nav-item">
            <a class="nav-a" href="{{route('Donate.uishowDonate')}}">Donate</a>
            </li>
            <li class="nav-item">
            <a class="nav-a" href="{{route('showClothes.uishowclothes')}}">Clothes</a>
            </li>
            <li class="nav-item">
            <a class="nav-a" href="/contact">ContactUs</a>
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
                        @if(Auth::user()->role=="user")
                        <a  href="{{route('profile.showprofile')}}">profile</a>
                        @endif

                         </li>
                            <li class="nav-item">
                                @if(Auth::user()->role=="admin")
                                <a  href="{{route('cloth.index')}}"
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
