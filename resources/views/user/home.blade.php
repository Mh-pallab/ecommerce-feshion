@extends('layouts.app')

@section('content')
   <!-- banner starts -->
   <div class="container-fluid banner">
      <div class="row align-items-center">
         <div class="col-md-6"></div>
         <div class="col-md-6 text-center">
            <h1 class="text-uppercase">stylist picks beat the heat</h1>
            <button class="btn btn-outline-light">SHOP NOW</button>
         </div>
      </div>
   </div>
   <!-- banner ends -->

   <!-- new arrivals starts -->
   <div class="container ">
      <div class="newArrivals">
         <div class="text ">
            <h3>Discover NEW Arrivals</h3>
            <p>Recently added shirts!</p>
         </div>

         <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$29.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

         </div>
      </div>
      <!-- new arrivals ends -->


      {{-- free shiping banner starts --}}
      <div class="row mx-4 supportInfo">
         <div class="col-lg-3 col-md-6 col-6">
            <div class="row ">
               <div class="col-auto"><i class="fa-solid fa-truck-fast"></i></div>
               <div class="col">
                  <h6>FREE SHIPPING</h6>
                  <p>Enjoy free shipping on all orders above $100</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-6">
            <div class="row">
               <div class="col-auto"><i class="fa-solid fa-life-ring"></i></div>
               <div class="col">
                  <h6>SUPPORT 24/7</h6>
                  <p>Our support team is there to help you for queries</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-6">
            <div class="row">
               <div class="col-auto"><i class="fa-solid fa-rotate-left"></i></div>
               <div class="col">
                  <h6>30 DAYS RETURN</h6>
                  <p>Simply return it within 30 days for an exchange.</p>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-6">
            <div class="row">
               <div class="col-auto"><i class="fa-solid fa-fingerprint"></i></div>
               <div class="col">
                  <h6>100% PAYMENT SECURE</h6>
                  <p>Our payments are secured with 256 bit encryption</p>
               </div>
            </div>
         </div>
      </div>
      {{-- free shiping banner ends --}}


      {{-- place your mind stats --}}
      <div class="row peaceOfMind mx-4">
         <div class="col col-7 text-center mx-2">
            <h2>peace of mind</h2>
            <p>A one-stop platform for all your fashion needs, hassle-free. Buy with a peace of mind.</p>
            <a href="#" class="btn btn-light">BUY NOW</a>
         </div>

         <div class="col text-center mx-2">
            <h2>Buy 2 Get 1 Free</h2>
            <p>End of season sale. Buy any 2 items of your choice and get 1 free.</p>
            <a href="#" class="btn btn-light">BUY NOW</a>
         </div>
      </div>
      {{-- place your mind ends --}}


      {{-- top sellers starts --}}
      <div class="newArrivals topSellers">
         <div class="text ">
            <h3>Top Sellers</h3>
            <p>Browse our top-selling products</p>
         </div>

         <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$29.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="card h-100">
                  <img src="{{ asset('picture/unsplash_KjRkxQ2NNXA.png') }}" class="card-img-top" alt="...">
                  <div class="card-body">
                     <h5 class="card-title">Plain White Shirt</h5>
                     <p class="card-text">$175.00</p>
                  </div>
               </div>
            </div>

         </div>

         <div class="topSellersButton text-center my-5">
            <a href="#" class="btn btn-lg btn-light">SHOP NOW</a>

         </div>
      </div>
      {{-- top sellers ends --}}



   </div>
   {{-- footer starts --}}
   <div class="container-fluid">
      @include('user.footer')
   </div>
   {{-- footer ends --}}
@endsection
