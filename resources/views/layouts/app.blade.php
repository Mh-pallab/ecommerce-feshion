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

   <!-- Scripts -->
   @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
   <div id="app">
      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
         <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               <img src="{{ asset('picture/logo.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <!-- Left Side Of Navbar -->
               <ul class="navbar-nav me-auto">

                  @if (Auth::check())
                  <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href=" {{route('home')}} ">HOME</a>
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


                  <li class="nav-tiem">
                     <a href="#" class="nav-link me-2"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                           <path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
                        </svg></a>
                  </li>

                  <li class="nav-tiem me-2">
                     <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                           <path d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
                        </svg></a>
                  </li>


                  <li class="nav-item dropdown">
                     <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
                           <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                        </svg>
                     </a>

                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                           {{ __('Logout') }} {{ Auth::user()->name }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                           @csrf
                        </form>
                     </div>
                  </li>
                  @endguest
               </ul>
            </div>
         </div>
      </nav>

      <main class="py-4">
         @yield('content')
      </main>
   </div>
</body>

</html>