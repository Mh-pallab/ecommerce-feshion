<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>NorthStar</title>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
   <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
         <div class="container">
            <a class="navbar-brand" href="{{ url('/home') }}">
               <img src="{{ asset('picture/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
               data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               <ul class="navbar-nav me-auto">

                  @if (Auth::check() && Auth::user()->role == 'user')
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=" {{ route('home') }} ">HOME</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#">CONTACT US</a>
                     </li>
                  @endif




               </ul>

               <!-- Right Side Of Navbar -->
               <ul class="navbar-nav ms-auto">
                  <!-- Authentication Links -->
                  @guest
                     @if (Route::has('login'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                     @endif

                     @if (Route::has('register'))
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                     @endif
                  @else
                     @if (Auth::check() && Auth::user()->role == 'user')
                        @include('layouts.userNav')
                     @else
                        <li class="nav-item dropdown">
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                           </a>

                           <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                 @csrf
                              </form>
                           </div>
                        </li>
                     @endif
                  @endguest
               </ul>
            </div>
         </div>
      </nav>

      <main class="pb-4">
         @if (Auth::check() && Auth::user()->role == 'user')
            @yield('content')
         @elseif(Auth::check() && Auth::user()->role == 'admin')
            <div class="container">
               <div class="row mt-3">
                  @include('layouts.adminSidebar')
                  @yield('content')
               </div>
            </div>
         @else
            @yield('content')
         @endif
      </main>
   </div>
</body>

</html>
