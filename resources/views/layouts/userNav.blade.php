<li class="nav-tiem">
   <a href="#" class="nav-link me-2"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
         <path
            d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z" />
      </svg></a>
</li>

<li class="nav-tiem me-2">
   <a href="#" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
         <path
            d="M160 112c0-35.3 28.7-64 64-64s64 28.7 64 64v48H160V112zm-48 48H48c-26.5 0-48 21.5-48 48V416c0 53 43 96 96 96H352c53 0 96-43 96-96V208c0-26.5-21.5-48-48-48H336V112C336 50.1 285.9 0 224 0S112 50.1 112 112v48zm24 48a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm152 24a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z" />
      </svg></a>
</li>


<li class="nav-item dropdown">
   <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false" v-pre>
      <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 448 512">
         <path
            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
      </svg>
   </a>

   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
         {{ __('Logout') }} {{ Auth::user()->name }}
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
      </form>
   </div>
</li>
